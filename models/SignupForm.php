<?php
namespace app\models;
use yii\base\Model;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $surname;
    public $phone;

    public $address;
    public $street;
    public $house;
    public $city;

    public $comment;
    public $password;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['surname', 'trim'],
            ['surname', 'required'],
            ['surname', 'string', 'max' => 255],

            ['phone', 'trim'],
            ['phone', 'required'],
            ['phone', 'string', 'max' => 255],
            ['phone', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This phone is already taken.'],

            ['street', 'trim'],
            ['street', 'required'],
            ['street', 'string', 'max' => 255],

            ['house', 'trim'],
            ['house', 'required'],
            ['house', 'string', 'min' => 1, 'max' => 255],

            ['city', 'trim'],
            ['city', 'required'],
            ['city', 'string', 'max' => 255],

            ['comment', 'trim'],
            ['comment', 'string', 'min' => 1, 'max' => 255],
        ];
    }
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();

        $user->username = $this->username;
        $user->surname = $this->surname;
        $user->phone = $this->phone;
        $user->address = $this->city. ', ' .$this->street . ' st. ' . $this->house;
        $user->comment = $this->comment;

        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}