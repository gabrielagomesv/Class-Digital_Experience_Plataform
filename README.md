# Node.js configuration

## Installing packages

#### 1. Npm

```
npm init
npm install
npm install -g nodemon

```

#### 2. Express

```
npm install express --save
```

#### 3. EJS

```
npm install ejs --save
```

#### 4. MySQL

```
 npm install mysql --save
```

#### 5. Consign

```
npm install consign --save
```

#### 6. Nodemon

  *Fiap setup:* https://stackoverflow.com/questions/17975999/i-can%C2%B4t-install-nodemon-globally-nodemon-not-recognized


## Folder structure
```
| app
    | models
      carsModel.js
      clientsModel.js
    | routes
      cars.js
      clients.js
    | views
      cars
        index.ejs
      clients
        show.ejs
        index.ejs
|config
  db.js
  server.js
app.js
```