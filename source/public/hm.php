<textarea rows="600" cols="100" style="font-size: 16px">
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
		'email', 
		'password', 
		'HoVaTen', 
		'NgaySinh', 
		'SoDienThoai', 
		'GioiTinh', 
		'DiaChi', 
		'ThanhPho',
		'Quan',
		'Role',
		'Active'
    ];
	public $rules = [
		'username' =>'required|min:4|unique:users,username',
		'password' => 'required|min:4|confirmed',
		'email' => 'required|e-mail|unique:users,email',
		'HoVaTen' => 'required',
		'NgaySinh' => 'date|required',
		'SoDienThoai' => 'numeric|required', 
		'GioiTinh' => 'required',
		'DiaChi' => 'required',
		'ThanhPho' => 'required',
		'Quan' => 'required',
	];
	public $messages = [
		'username.required' => 'Tên đăng nhập là trường bắt buộc',
		'username.min' => 'Tên đăng nhập phải chứa ít nhất 4 ký tự',
		'username.unique' =>'Tên đăng nhập đã được đăng ký',
		'password.required' => 'Mật khẩu là trường bắt buộc',
		'password.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
		'password.confirmed' => 'Mật khẩu không khớp',
		'email.e-mail' => 'Email không hợp lệ',
		'email.required' => 'Email là trường bắt buộc',
		'email.unique' => 'Email đã được đăng ký',
		'HoVaTen.required' => 'HoVaTen là trường bắt buộc', 
		'NgaySinh.required' => 'NgaySinh là trường bắt buộc', 
		'NgaySinh.date' => 'NgaySinh là không hợp lệ', 
		'SoDienThoai.required' => 'SoDienThoai là trường bắt buộc', 
		'SoDienThoai.numeric' => 'SoDienThoai không hợp lệ', 
		'GioiTinh.required' => 'GioiTinh là trường bắt buộc', 
		'DiaChi.required' => 'DiaChi là trường bắt buộc', 
		'ThanhPho.required' => 'ThanhPho là trường bắt buộc',
		'Quan.required' => 'Quan là trường bắt buộc',
	];
/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','Role','Active'
    ];
	
	public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
	
	public function isAdmin(){
		return ($this->Role == 1);
	}
	
	
}
";
console.log(str);
</textarea>