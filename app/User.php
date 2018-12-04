<?php

namespace Ellego;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ellego\Course;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'id', 
    ];

    public function getId()
{
  return $this->id;
}

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
      return $this->belongsToMany(Role::class);
    }

    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
      if (is_array($roles)) {
          return $this->hasAnyRole($roles) ;
      }
      return $this->hasRole($roles);
    }

    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    
    /** 
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }

    /**
    * Check one Relacionamento.
    * 
    */
    public function courses()
    {
      //     $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. user em pivot', 'key ref. courses em pivot')
      return $this->belongsToMany(Course::class,'courses_users','course_id','user_id');
    }

    public function pontuacaos()
    {
        return $this->hasMany('Pontuacao');
    }
}
