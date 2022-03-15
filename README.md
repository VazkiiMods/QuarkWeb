# QuarkWeb
Quark Website
https://quarkmod.net

## Contributing

These instructions assume you have push permissions to the repository. If you do not, Fork it first and use the forked repository URL instead of the main one anywhere the main URL is used. Forking requires a GitHub account and can be done via the button on the top-right.

### Requirements
* Knowledge of the JSON format
* An Apache distribution (this guide will use [XAMPP](https://www.apachefriends.org/index.html))
* A git client (this guide will use [Sublime Merge](https://www.sublimemerge.com))

### Preparation
* Load XAMPP and locate your /htdocs directory:

![](https://puu.sh/IOXt8/c5d1fe53cb.png)

* Inside /htdocs, create a file called `test.txt` and write any old jargon in it
* Start your XAMPP Apache server using the Start action next to Apache in the interface
* Once started, using your browser, navigate to http://localhost/test.txt - continue if what you wrote appears
* Open your git client, and clone the QuarkWeb repository, making sure it's located in a folder inside your /htdocs:

![](https://puu.sh/IOXvg/d1f2889fff.png)

* Navigate to http://localhost/QuarkWeb to validate that the website is correctly loaded - continue if it matches the live version
* Open /htdocs/QuarkWeb, and edit config.php (not config.php.example) with your text editor of choice
* Ensure `$cache_enabled` is set to `false`
* If http://localhost/QuarkWeb loads again properly, you are ready to start editing
* Edit `features.json` with your text editor of choice to start

### Editing

**features.json Format**
* Features are located inside arrays representing categories
* Each feature needs a `name`, `image`, `added` version, and a `desc`, which you can already see in every features
* Additionally, features may also have a `removed` field, if they were removed from the mod, and an `expand` field, which if included adds the More Info button to their cards
* `desc` is an array, where each line represents a paragraph, lines may also represent other elements based on the first character
  * `*` represents an unsorted list
  * `#` represents a header
  * `!` represents an inline image URL
  * `-` rpresents a horizontal ruler
* `expand` uses the same format as `desc` but only shows when the More Info button is clicked

**Editing Standards**
* `image`s must be 400x400 .jpgs, located in the appropriate category under /img/features
* Additional images other than the main feature ones should be included in subfolders (see /img/features/oddities/pipes)
* Additional images are to be 500px width .jpgs
* The content of `desc` must not cause the corresponding card to stop laying flush with the image box ([as such](https://puu.sh/IOXH6/dc278d90a6.png). If more space is needed, use `expand`


**Committing**

* Once you've made your changes, you must commit them to the repository. Open Sublime Merge, and your changes will be shown there.
* Write a commit message at the top, and press Stage All:

![](https://puu.sh/IOXOs/6a1b366aa1.png)

* Following that, commit your change, then pull and push, in that order:

![](https://puu.sh/IOXPw/8fa062d1ad.png)

* If all went well, your change should be live in the repository here on GitHub

**What to document?**

To find out what is currently missing, compare the date of the latest update to the date of the previous Quark version. (e.g. if the website was updated on March 12, and there's versions released on March 10 and March 15, any content changes from the March 15 version onwards need to be added). You can find the list of released Quark versions on the [CurseForge versions list](https://www.curseforge.com/minecraft/mc-mods/quark/files).

**Troubleshooting**

If the result of your changes is incorrect or you get an error, try pasting your features.json content into https://jsonlint.com - this should help you locate syntax errors and fixing them.
