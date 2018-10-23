<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    public function roles()
    {
        return $this->belongsToMany(Roles::class);
    }
    public function authorizeRoles($roles)

    {

        if (is_array($roles)) {

            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is unauthorized.');

        }

        return $this->hasRole($roles) ||
            abort(401, 'This action is unauthorized.');

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
}