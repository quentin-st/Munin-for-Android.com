#!/bin/bash

function set_acl() {
    # set ACL on var folder if necessary
    CURRENT_USER=`whoami`
    FOLDER="$1"
    ACL=`getfacl "$FOLDER" | grep -E "($CURRENT_USER|www-data):..x$" -ic`
    if [[ "$ACL" != 4 ]]; then
        echo "setting missing ACLs on $FOLDER"
        setfacl -R -m u:www-data:rwX -m u:"$CURRENT_USER":rwX "$FOLDER" && \
        setfacl -dR -m u:www-data:rwX -m u:"$CURRENT_USER":rwX "$FOLDER"
    fi
}
set_acl logs
set_acl cache

composer --ansi -n install --no-dev --optimize-autoloader
sass public/css/style.scss > public/css/style.css
