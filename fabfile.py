from __future__ import with_statement
from fabric.api import local, settings, abort, run, cd, env, prefix
from fabric.contrib.console import confirm
# fab sync
# fab deploy ... (syncs with GitHub and then deploys to server)


env.hosts = ['webninj1@webninjataylor.com']


def sync():
    local("grunt")
    local("git add .")
    local("git commit")
    local("git push origin")


def deploy():
    code_dir = '/home6/webninj1/public_html/wntframework/'

    sync()

    with cd(code_dir):
        run("git pull")
