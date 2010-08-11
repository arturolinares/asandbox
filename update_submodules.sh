#/bin/bash
cd plugins

cd sfJqueryReloadedPlugin
git fetch origin
git checkout master
git pull origin master

cd ../sfDoctrineGuardPlugin/
git fetch origin
git checkout master
git pull origin master

cd ../sfDoctrineActAsTaggablePlugin
git fetch origin
git checkout master
git pull origin master

cd ../sfSyncContentPlugin/
git fetch origin
git checkout master
git pull origin master

cd ../sfTaskExtraPlugin/
git fetch origin
git checkout master
git pull origin master

cd ../apostrophePlugin/
git fetch origin
git checkout master
git pull origin master

cd ../apostropheBlogPlugin/
git fetch origin
git checkout master
git pull origin master

cd ../sfFeed2Plugin/
git fetch origin
git checkout master
git pull origin master

cd ../sfWebBrowserPlugin/
git fetch origin
git checkout master
git pull origin master

cd ../../lib/vendor/symfony
git fetch origin
git checkout master
git pull origin master

cd ../../../
