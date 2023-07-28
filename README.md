One to One

Tables:
users
contacts
User has one Contact
Contact belongs to User

<!-- for seed with migrate -->

php artisan migrate:fresh --seed

<!-- One-to-One (1:1) Relationship: -->

<!-- Example: One user has one profile. -->

<!-- User Model: -->

public function profile()
{
return $this->hasOne(Profile::class);
}

<!-- Profile Model: -->

public function user()
{
return $this->belongsTo(User::class);
}

<!-- One to Many -->

Tables:
users
posts

User has many Posts
A Post belongs to a User

<!-- One-to-Many (1:N) Relationship: -->

<!-- Example: One user has multiple posts. -->

<!-- User Model: -->

public function posts()
{
return $this->hasMany(Post::class);
}

<!-- Post Model: -->

public function user()
{
return $this->belongsTo(User::class);
}

<!-- Many to Many -->

tables:
posts
categories
category_post

A Post belongs to Many Categoreis
A category belongs to many Posts

<!-- Many-to-Many (N:N) Relationship: -->
<!-- Example: A user can have multiple roles, and a role can be assigned to multiple users. -->

<!-- User Model: -->

public function roles()
{
return $this->belongsToMany(Role::class);
}

<!-- Role Model: -->

public function users()
{
return $this->belongsToMany(User::class);
}

<!-- Configuration of customer helper in Laravel -->

<!-- <?php

// Important Function

echo 'Hello';    //show every page -->

"autoload": {
"classmap": [
...
],
"psr-4": {
"App\\": "app/"
},
"files": [
"app/helper.php" // <---- ADD THIS
]
},

cmd=> composer dump-autoload

<!-- for session -->

@if (session()->has('user_name))
{{session()->get('user_name')}}
@else
Guest
@endif


<!-- for validation request class -->
php artisan make:request ContactFormRequest
