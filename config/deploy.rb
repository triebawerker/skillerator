set :application, "Skillerator"
set :repository,  "ssh://git@git.catalano-it.de:skillerator.git"

set :scm, :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

set :deploy_to, "/var/www/clients/client2/web54/web"
set :user, "triebamicha"
set :scm_username, "triebamicha"
set :use_sudo, false

role :web, "micha.catalano.de"                          # Your HTTP server, Apache/etc
role :app, "micha.catalano.de"                          # This may be the same as your `Web` server
role :db,  "micha.catalano.de", :primary => true        # This is where Rails migrations will run

# =============================================================================
# CAPISTRANO OPTIONS
# =============================================================================
set :keep_releases, 3
set :deploy_via, :remote_cache
set :app_symlinks, %w{uploads} # dirs that need to remain the same between deploys

# =============================================================================
# # OVERWRITE CAPISTRANO TASKS
# # =============================================================================
 namespace :deploy do
   desc "Overwrite the start task to set the permissions on the project."
   task :start do
         run "php #{release_path}/symfony project:permissions"
         run "php #{release_path}/symfony doctrine:build --all --no-confirmation"
   end
                 
   desc "Overwrite the restart task because symfony doesn't need it."
   task :restart do ; end
                       
   desc "Overwrite the stop task because symfony doesn't need it."
   task :stop do ; end
                             
   desc "Customize migrate task to work with symfony."
   task :migrate do
    run "php #{latest_release}/symfony doctrine:migrate --env=prod"
   end
                                         
   desc "Symlink static directories that need to remain between deployments."
   task :create_dirs do
     if app_symlinks
