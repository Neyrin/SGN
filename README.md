### Support Group Network
The purpose of the project was to rebuild the website for the organization Support group Network. 

## The project
A school project by Yrgo students of Web Development(WU) and Digital Designer(DD). The website is built in WordPress using [WordPlate](https://wordplate.github.io/). 
The project has to meet following requirements:
-	The website must be translatable the minimum requirement are between English and Swedish.
-	The website must be accessibility proof such as contrast, languages, visibility, screen reader.
-	The website must be built in WordPress with a CMS for the customer to work with for updates.
-	Links to different pages with project with own identity and links to groups on Facebook.
-	News with feed from Facebook.

# Built With
-	WordPress
-	Php

# Collaborators
* [Isa Areschoug](https://github.com/Neyrin) (WU)
* [Ida Hallner](https://github.com/idahal) (WU)
* [Mathias Kristiansson](https://github.com/mrmakr) (WU)
* Fanny Wickius (DD)
* Isak Martinson (DD)


# Reflections
The website is translatable between English and Swedish by using the polylang plugin, the customer can add additional languages by setting up another language in the menu-page and then copying the existing wordpress-page and replacing the content with the new translation.

The website is built with the block editor using Gutenberg blocks. The pros of this method is that the costumer has total freedom to change texts, color, components and blocks as he or she would like. The con side of this being that the site is easily broken. To add more content or change something on the website the customer can use designed reusable blocks like footer and media-textblock. 
During the project we reflected over the choice to use only Gutenberg block to build the website. Having a unconfined site can be a strength if the customer has very good knowledge of WordPress but is very weak if your costumer only want to be able to add content and not have access to the design. 
To optimize the website for the customer, this webite should be rebuilt using custom post types to control which content the customer can add to the website. With single-pages templates we could control the data that we want to display and the looks of it on the backside. To create fields and control which field we want to reach and display on the website we should download and activated the ACF-plugin. This would make the website more useful to the customer and reduce the risk of destroying the layout. Another way to go would be to use the Wordpress API and build a front-end separately with for example React JS. 


# License
This project is licensed under the MIT License – see the [LICENSE.md](https://choosealicense.com/licenses/mit/) file for details.
