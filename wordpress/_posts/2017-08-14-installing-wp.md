---
layout: class
site: MMP 460 Multimedia Project Lab
categories: wordpress
title: Installing your first WordPress Site on the WPMMP server
---

**Step 1: Download and Extract**

- Set up a local folder on your portable drive for your server files. Name it wpmmp.
In this folder create a folder for our assignment. Call it portfolio.
- [Download WordPress](http://wordpress.org/download/) and unzip it. Copy or move the files to the folder portfolio.

**Step 2: Create the Database and a User**

* Log in to your cPanel at https://wpmmp.bmcc.cuny.edu:2083/. 
    - Username: your first name initial followed by the first 7 letters of your last name (or less if your last name is shorter than 7 letters). For example, if your name was John Smith your username would be jsmith.
   - Password: your emplid, an 8-digit identification number, which you can find on CUNYfirst.
- Click MySQL Database Wizard icon under the Databases section.
- In **Step 1. Create a Database**, enter the database name and click Next Step. Recommended: use the suffix ‘_db’, such as ‘jsmith_db’.
- In **Step 2. Create Database Users** enter the database user name and the password. Make sure to use a strong password. Click Create User. Recommended: use the the same username and password that you use to log in to the cPanel.
- In **Step 3. Add User to Database** click the All Privileges checkbox and click Next Step.
- In **Step 4. Complete the task** note the database name and user. Note that our server’s hostname is **mysqlsvr**. Write down the values of hostname, username, databasename, and the password you chose.

**Step 3: Set up wp-config.php**

Return to where you extracted the WordPress package in Step 1 (the folder portfolio), rename the file wp-config-sample.php to wp-config.php, and open it in a text editor. Enter your [database information](https://codex.wordpress.org/Editing_wp-config.php#Configure_Database_Settings) under the section labeled:

         // ** MySQL settings - You can get this info from your web host ** //
        DB_NAME 
        
The name of the database you created for WordPress in Step 2 . For example:

        define('DB_NAME', 'jsmith_db');
        DB_USER 
        
The username you created for WordPress in Step 2. For example:

        define('DB_USER', 'jsmith_jsmith');
        DB_PASSWORD 
        
The password you chose for the WordPress username in Step 2.

        DB_HOST 
        The hostname you determined in Step 2 (in our case is mysqlsvr). For example:
        define('DB_HOST', 'mysqlsvr');
        DB_CHARSET 

The database character set, normally should not be changed (see [Editing wp-config.php](https://codex.wordpress.org/Editing_wp-config.php)).

        DB_COLLATE 

The database collation should normally be left blank (see [Editing wp-config.php](https://codex.wordpress.org/Editing_wp-config.php)).
        
        TABLE_PREFIX
        
This step is required in order to use one database for multiple WordPress sites: give a unique name for your WordPress site’s database tables in

        $table_prefix = 'wp_'; // example: 'as1_' or 'portfolio_'

By default, WordPress assigns the table prefix wp_ to its MySQL database tables, but this prefix can be anything you choose. By using more than one, you create unique identifiers for each blog in your database. Read more about [installing multiple WordPress sites with one database](https://codex.wordpress.org/Installing_Multiple_Blogs).

**Step 4: Upload the files**

- [Use Filezilla to connect to your server account](https://revitalk.github.io/mmp460/wordpress/2017/08/14/upload-files.html). Be sure to specify the folder that you created in step 1 as your default local directory. Upload the folder portfolio to the folder public_html in the server.

**Step 5: Run the Install Script**

- Point a web browser to start the installation script:
- Go to http://wpmmp.bmcc.cuny.edu/~username/foldername/ (in our case http://wpmmp.bmcc.cuny.edu/~username/portfolio/)
- Complete the installation by entering all the required information. It is highly recommended that you use the same username and password that you use for accessing the cPanel as you won’t be able to click “Forgot Password” and get it back.
- For more information on the install process please go to http://codex.wordpress.org/Installing_WordPress.
