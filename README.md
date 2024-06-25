# propertybook

## How to run the project
A demo of this project is available online at [https://property.flixtechs.co.zw](https://property.flixtechs.co.zw).

Username and password for the demo are:
`admin@admin.com` and `demoadmin`.

To run the project locally, follow these steps:

### Clone the repository
```bash
git clone git@github.com:SlimGee/propertybook.git
```

### Install dependencies
```bash
composer install
```

```bash
yarn install && yarn build
```

Or if you prefer npm
```bash
npm install && npm run build
```

### Set up the environment file
```bash
cp .env.example .env
```

Configure the database connection in the `.env` file.

Migration the database
```bash
php artisan migrate
```

### Generate the application key
```bash
php artisan key:generate
```

### Create super admin user
The backoffice admin is build with Statamic, [Statamic](https://statamic.com/). To create a super admin user, run the following command:
```bash
php please make:user
```

### Serve the application
If you have Lravel Valet installed, you can serve the application with the following command:
```bash
valet open
```

Or you can use the built-in Laravel server:
```bash
php artisan serve
```

## Updating content
Like I mentioned earlier, the backoffice is built with Statamic. To access the backoffice, visit `/cp` on your local server. You can log in with the super admin user you created earlier.

Navigate to `Collections > Pages` to update the content of the pages.

Each section of the page can be updated by clicking on the section and updating the content.


