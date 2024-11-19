<?php

namespace App\Http\Controllers;

use App\Enums\SocialLoginEnum;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Laravel\Socialite\Facades\Socialite;
use function Laravel\Prompts\error;

class AuthController extends Controller
{
    public function redirect(SocialLoginEnum $provider): JsonResponse
    {
        return response()->json([
            'message' => 'redirecting to provider',
            'data' => Socialite::driver($provider->value)->redirect()->getTargetUrl(),
        ]);
    }

    public function login(SocialLoginEnum $provider): JsonResponse
    {
        try {
            $socialUser = Socialite::driver($provider->value)->stateless()->user();

            $user = User::query()
                ->firstOrCreate([
                    'name' => $socialUser->name,
                    'email' => $socialUser->email,
                ], [
                    'password' => bcrypt(request(Str::random())),
                    'email_verified_at' => now(),
                ]);

            $socialLogin = $user->socialProviders()
                ->where([
                    'provider_id' => $socialUser->id,
                    'provider_name' => $provider->value,
                ])
                ->exists();

            if (!$socialLogin) {
                $user->socialProviders()
                    ->create([
                        'provider_id' => $socialUser->id,
                        'provider_name' => $provider->value,
                    ]);
            }

            $user->token = $user->createToken(config('app.name'))->plainTextToken;

            return response()->json([
                'message' => 'Successfully logged in',
                'data' => $user,
            ]);

        } catch (Exception $exception) {
            error($exception->getMessage());
            return response()->json([
                'message' => 'Something went wrong please try again',
                'data' => null,
            ]);
        }
    }
}
