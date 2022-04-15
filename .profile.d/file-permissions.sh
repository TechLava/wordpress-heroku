#!/usr/bin/env bash

# Sets WordPress file permissions for a secure environment

# - create folders
mkdir -p $HOME/web/app/uploads

# - deny write on everything
chmod -R a-w $HOME/web

# - allow write to web/app/uploads
chmod 777 $HOME/web/app/uploads

chmod 777 $HOME/web/wp/wp-content
