PHP Error Pages for Wordpress
========================

Wordpress plugin that utliizes Whoops! Error Page (http://filp.github.io/whoops/) to show better PHP errors.

I'm surprised that with all of the development that has gone into Wordpress, we don't have more helpful error pages other than the default PHP error line.

This plugin fixes that. Since it is installed as a plugin, if you have another plugin that contains an error before hooks are ready, you will see the standard one-liner PHP error. But any fatal errors in a function/class that is launched during a filter/hook should be caught by this plugin.

All credit goes to the Whoops! Team. Thanks guys!
