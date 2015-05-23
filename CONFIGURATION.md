
Configuration
==============

Configuration of the wordpress installation and the used plugins.

## WORDPRESS

### General
- Site Title: ContentMine
- Timezone: London

### Reading
- Front page displays ->  "A static page (select below)"  -> Front page = Landing Page & Posts Page = Blog
- Blog pages show at most -> 5

### Discussion
- Other comment settings -> enable "Comment author must fill out name and e-mail"
- disable "A comment is held for moderation"
- disable "Comment author must have a previously approved comment"

### Permalinks
- Common Settings -> Post name

### Media
- Medium size => Max Width 600px, max Height 400px

## Plugins

### Slideshare
- width: 780 pxl

### Video Thumbnails
- Post Types: post + event
- Automatically Set Featured Image -> disable

### SZ Google
- Google Groups -> activate

**Google Groups**
- Group name: contentmine-workshops
- show search -> enable

### Syntax Highlight Compress


### Event Organiser
**General**
- Select which features events should support -> enable "Revisions"
- Show past events: enable

### Zotero

### Link Checker
**General**
- Send me e-mail notifications about newly detected broken links -> disable
- Send authors e-mail notifications about broken links in their posts -> enable

**Look for links in**
- Look for links in -> Events -> enable

**Which links to check**
- Link types: enable
	- Embedded YouTube videos (old embed code) 
	- Plaintext URLs 
	- Embedded GoogleVideo videos 
	- Embedded YouTube playlists (old embed code) 
	- Smart YouTube httpv:// URLs 
	- Embedded Vimeo videos 
	- Embedded DailyMotion videos 

### Spam Free Wordpress
- Spam Stats -> enable

### Antispam Bee 
- Statistics on the dashboard -> enable

### Mathjax Latex


### Shariff
- Select theme (Shariff button design). -> white
- Check this to make the buttons 30% smaller (all designs). -> enable
- Put in the services you want to enable -> twitter|facebook|googleplus|mail|info
- Check this to show share statistics. -> enable
- Set the screen name for Twitter (via) to -> TheContentMine

### Twitter Pro
- authorize account

### Breadcrumb NavXT
**General**
- Home Template -> <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to %title%." href="%link%" class="%type%">Home</a></span>
- Home Template (Unlinked) -> <span typeof="v:Breadcrumb"><span property="v:title">Home</span></span>

**Post Types**
- Event Root Page -> Events
- Post Hierarchy Display -> disable
- Event Hierarchy Display -> disable

**Post Types**
- Posts: 
	-  Post Hierarchie: Post Parent

### Printfriendly
- gray button 
- Display button on: enable "Add direct to template"

### All in One SEO
#### General Settings
**Home Page Settings**
- Home Title: ContentMine
- Home Description: XXXXX
- Home Keywords (comma separated): 

### WP Security
- enable "Hide WordPress version for all users but administrators"
- enable "Remove various meta tags generators from the blog's head tag for non-administrators"
- enable "Remove Really Simple Discovery meta tags from front-end"
- enable "Remove Really Simple Discovery meta tags from front-end"
- enable "Remove Windows Live Writer meta tags from front-end"
- enable "Disable error reporting (php + db) for all but administrators"
- enable "Remove core update notifications from back-end for all but administrators"
- enable "Remove plug-ins update notifications from back-end"
- enable "Remove themes update notifications from back-end"
- enable "Remove login error notifications from front-end"
- enable "Hide admin notifications for non admins"
- enable "Try to create the index.php file in the wp-content, wp-content/plugins, wp-content/themes and wp-content/uploads directories to prevent directory listing"
- enable "Remove the version parameter from urls"
- enable "Empty the content of the readme.html file from the root directory"
- enable "Enable Live Traffic tool."

**Scan Social Meta**
- run it

### FeedWordpress

#### Syndicated Sites
- 

#### Feeds and Updates
**Updating Schedule**
- Updates: Cron job or manual updates
	- we used a shell script, which calls the correct url
- Updates Posts: No, leave the syndicated copy unmodified

#### Authors
- Unmatched authors: will have their posts attributed to <USERNAME>

#### Posts & Links
**Syndicated Posts**
- New posts: Hold syndicated posts for review; mark as Pending
- Updated posts: No, leave the syndicated copy unmodified

**Links**
- Permalinks point to: The copy on the original website
- Posts from aggregator feeds: Give the original source of the post as the source, not the aggregator.

#### Categories & Tags
- Match feed categories: disable all
- Unmatched categories: Don't create any matching terms
- Match inline tags: unselect all
- Unmatched inline tags: Don't create any matching terms


### Custom Fields




