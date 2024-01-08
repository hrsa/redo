# redo
`migrate:redo` command for Laravel 5.5+

1. Make sur you're using Laravel 5.5 or higher
2. Run `composer require --dev hrsa/redo`
3. Run `php artisan migrate:redo` as much as you want! :)



A lot of developers (myself included) often have to rollback and re-run the newly-created migration because we had a last-second decision that we need to add another column, or change the column structure.

I know that there is an option to do php artisan migrate:refresh --step=1 - but the command often needs an additional alias due to its length - because most of the time we don't need to refresh all the migrations (as it does with no parameters), but only the recent one.

So, such command would help us save the time developing and quickly editing new migrations !

Just in case, it also accepts ``--step` parameter, which defaults to 1 but can be set to any number.
