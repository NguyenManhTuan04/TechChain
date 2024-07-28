<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class ResetPasswordController extends Controller
{
    // Hiển thị form để người dùng nhập mật khẩu mới
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.admin.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    // Xử lý yêu cầu đặt lại mật khẩu
    public function reset(Request $request)
    {
        // Xác thực dữ liệu nhập vào
        $this->validator($request->all())->validate();

        // Tạo đối tượng xác thực
        $response = Password::reset(
            $this->credentials($request), function ($user, $password) {
            // Cập nhật mật khẩu người dùng
            $this->resetPassword($user, $password);

            //Tự động đăng nhập
            Auth::login($user);
        }

        );

        // Chuyển hướng hoặc trả về lỗi
        return $response == Password::PASSWORD_RESET
            ? redirect($this->redirectPath())
            : back()->withErrors(
                ['email' => [__($response)]]
            );
    }

    // Xác thực dữ liệu yêu cầu đặt lại mật khẩu
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);
    }

    // Lấy thông tin đăng nhập từ yêu cầu
    protected function credentials(Request $request)
    {
        return $request->only('email', 'password', 'token');
    }

    // Cập nhật mật khẩu người dùng
    protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);
        $user->save();
    }

    // Đường dẫn sau khi đặt lại mật khẩu thành công
    protected function redirectPath()
    {
        return 'admins';
    }
}

?>
