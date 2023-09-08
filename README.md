# el7 Starting Wordpress Theme  **(v 2.1.0)**
    > el7 Starting Wordpress Theme made for el7 Wordpress Projects
        > el7 Wordpress Coding Standard is Wordpress' Coding Standard: (**https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/**)
        > This guide assumes that you have locally installed (globally):
        > * Node JS
        > * NPM
        > * gulp cli
        > * wp-cli

  ## Instalation

        Instalation is done only by 1 team member (let's call him **Admin**, and new project is **newproject**).

  #### Step 1
  **Admin** creates new empty repository on Github (ex: git@github.com:newproject.git)

  #### Step 2
  ##### **Admin** clones **this** repository in his projects folder like this:

  ```console
  git clone git@github.com:bkrsmanovic/wp-starting-template.git newproject
  ```

  ##### **Navigate** to that repository (cd **newproject**) and do following command (to switch remote branch from git@github.com:bkrsmanovic/wp-starting-template.git to git@github.com:newproject.git):
  ```console
  git remote set-url origin git@github.com:newproject.git
  ```

  You can check is remote origin changed, by typing command:
  ```console
  git remote -v
  ```

  and you should see output:
  ```console
  origin  git@github.com:newproject.git (fetch)
  origin  git@github.com:newproject.git (push)
  ```
  So far so good!

  #### Step 3
  ##### **Admin** can do this in few ways.
  * One way is to download clean Wordpress instalation, and unzip it inside **newproject** folder (be careful not to override our wp-content with themes and plugins!).
  * Other (more easier) way is, if you have wp-cli installed on your local machine.
  Use command:

  ```
  wp core download
  ```
  (for advance usage, visit http://wp-cli.org/)

  * After this you run npm installation command:

  ```
  npm install (or yarn)
  ```

  #### Step 4
  * Next step depends on your local environment. If you are using xampp, vagrant, or anything, theme and setup is compatible with it. Just continue with normal installation

  #### Step 5
  * In package.json, find **config.domain** and set it up like your localhost name (example: newproject-local.dev.el7.io or if you are on normal xampp/lamp/wamp/mamp setup, localhost/newproject)
  ```console
  "config": {
  "domain": "newproject-local.dev.el7.io"
  },
  ```
  * Code versioning control is done via Git (you already have default .gitignore inside, edit as needs require)
  * Enjoy developing!

  ### For advance usage with vagrant, please talk with Bojan.
##Have fun!