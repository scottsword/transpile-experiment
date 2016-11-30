# transpile-experiment
A benchmark test to profile transpiling ES2015/ES6 on the fly with [Bublé](https://buble.surge.sh/) + [Rollup](http://rollupjs.org/).

### 1 - Setup Env

#### Install Node
I'm running v6.2.2, so I'm not sure how this will run on older versions. If you don't already have node installed I would recommend using [Node Version Manager](https://github.com/creationix/nvm), it lets you easier swap out node versions. Once you install nvm you can just run `nvm install` which uses the `.nvmrc` file in the project which then installs and sets the desired version. If you don't want to use NVM, but still need to install Node just check out the main Node.js [docs](https://nodejs.org/en/download/package-manager/) and use the method best suited for your system.

```sh
nvm install
```

### 2 - Install project

```sh
npm install
```

### 3 - Run php snippet
```sh
php transpile_js.php
```
