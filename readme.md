## Laravel PHP Framework Template

This template is a collection of resources that I commonly use. It means that I can easily get started on a project without having to take as much time setting it all up.


### Requirements
This pacakge requires you to use `npm` and `gulp`, though you can remove that functionality if you wish!

Include ```"craigchilds94/laravel-template": "dev-master"``` in your `composer.json` file to include this template in your project.

### Commands to setup
```
sudo npm update
sudo composer update
gulp
```

### Virtual Host
```
Listen 1337
<VirtualHost *:1337>
    DocumentRoot "dir_of_http_server/laravel-template/public/"
    <directory "dir_of_http_server/laravel-template/">
        Options Indexes FollowSymLinks
        AllowOverride all
        Order Allow,Deny
        Allow from all
    </directory>
</VirtualHost>
```

## Documentation
So far there is no documentation for this template, watch this space.

## Laravel Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).


### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
