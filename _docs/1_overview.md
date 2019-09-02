# Bonfire

Bonfire is a flexible application starter based on [CodeIgniter4](https://codeigniter.com/). It doesn't provide
everything an application would need out of the box. Instead, if provides the structure and framework to start
building your own applications. It comes with an admin area already setup to manage users and more. 

## Folder Structure

**applications** 

This folder holds the applications that make up your overall app. Out of the box, it ships with two applications: 
the core admin area, and an Messages application that allows users to privately communicate with each other. 
Other applications might be forums, helpdesks, etc.

**bonfire**

This is the heart of the kickstarter and provides the bones that ties all your applications together. It provides
commonly-used libraries like menus, full theme support, and more. 

**public**

This holds the entry point to your application and is the folder that your web server should point to.

**themes**

Holds any themes used by your app. Ships with an __admin__ theme, and a __default__ theme that is a fairly
blank canvas based on Bootstrap 4 for your app's front end. That's yours to customize as you need to.

**writable**

This is the same folder that ships with a default CodeIgniter 4 installation, and holds all of the things
that you might need to write during your app's lifecycle.  
