<?php 

                        
/**
 * Strings for component 'oublog', language 'pt_br', branch 'MOODLE_31_STABLE'
 * 
 * Autor: 
 * Data: 
 */

$string['activeblogs'] = 'Active';
$string['addpost'] = 'Add post';
$string['advancedoptions'] = 'Advanced options';
$string['afterendcomment'] = 'You cannot comment on posts at this time. Commenting ended on {$a}.';
$string['afterendcommentcapable'] = 'Students were able to comment on posts until {$a}.
<br/> You have access to comment after this time.';
$string['afterendpost'] = 'You cannot create posts at this time. Post creation ended on {$a}.';
$string['afterendpostcapable'] = 'Students were able to create their own posts until {$a}.
<br/> You have access to create posts after this time.';
$string['allowcomments_help'] = '&lsquo;Yes, from signed-on users&rsquo; allows comments from users who have access to the post.

&lsquo;Yes, from everybody&rsquo; allows comments from users and from the general public. You will receive emails to approve or reject comments from users who are not signed in.

&lsquo;No&rsquo; prevents anyone from making a comment on this post.';
$string['allowimport'] = 'Enable post import';
$string['allowimport_help'] = 'Allow any user to import pages from other blog activities they have access to.';
$string['allowimport_invalid'] = 'Posts can only be imported when activity is set to individual mode.';
$string['alpha'] = 'A to Z';
$string['attachments_help'] = 'You can optionally attach one or more files to a blog post. If you attach an image, it will be displayed after the message.';
$string['beforeendcomment'] = 'You can only comment on posts until {$a}.';
$string['beforeendcommentcapable'] = 'Students are able to comment on posts until {$a}.
<br/> You have access to comment after this time.';
$string['beforeendpost'] = 'You can only create posts until {$a}.';
$string['beforeendpostcapable'] = 'Students are able to create their own posts until {$a}.
<br/> You have access to create posts after this time.';
$string['beforestartcomment'] = 'You cannot comment on posts at this time. Commenting is available from {$a}.';
$string['beforestartcommentcapable'] = 'Students cannot comment on posts until {$a}.
<br/> You have access to comment before this time.';
$string['beforestartpost'] = 'You cannot create posts at this time. Post creation is available from {$a}.';
$string['beforestartpostcapable'] = 'Students cannot create their own posts until {$a}.
<br/> You have access to create posts before this time.';
$string['blogfeed'] = '{$a} feeds';
$string['cancel'] = 'Cancel';
$string['commentalert'] = 'Report comment';
$string['commentdated'] = 'Dated';
$string['commentfrom'] = 'Commenting only allowed from';
$string['commentonbyusers'] = 'Comment <u>{$a->commenttitle}</u> on post <u>{$a->posttitle}</u> <br> by <u>{$a->author}</u>';
$string['commentposts'] = 'Most commented posts';
$string['commentposts_info_alltime'] = 'Posts with the most number of comments';
$string['commentposts_info_thismonth'] = 'Posts with the most number of comments added in the past month';
$string['commentposts_info_thisyear'] = 'Posts with the most number of comments added in the past year';
$string['comments_info_alltime'] = '{$a}s with the most number of comments';
$string['comments_info_thismonth'] = '{$a}s with the most number of comments added in the past month';
$string['comments_info_thisyear'] = '{$a}s with the most number of comments added in the past year';
$string['commentuntil'] = 'Commenting only allowed until';
$string['configmaxattachments'] = 'Default maximum number of attachments allowed per blog post.';
$string['configmaxbytes'] = 'Default maximum size for all blog attachments on the site.
(subject to course limits and other local settings)';
$string['configremoteserver'] = 'Root address (wwwroot) of remote server to be used for post imports.
Blogs on this server will be shown in addition to those on local site when importing posts.';
$string['configremotetoken'] = 'Web service user token for oublog webservices on import remote server.';
$string['confirmdeletepost'] = 'Are you sure you want to delete this post?';
$string['contribution'] = 'Participation';
$string['contribution_all'] = 'Participation - All time';
$string['contribution_from'] = 'Participation - From {$a}';
$string['contribution_fromto'] = 'Participation - From {$a->start} To {$a->end}';
$string['contribution_to'] = 'Participation - To {$a}';
$string['copytoself'] = 'Send a copy to yourself';
$string['defaultpersonalblogname'] = '{$a->name}\'s {$a->displayname}';
$string['deleteandemail'] = 'Delete and email';
$string['deletedblogpost'] = 'Untitled post.';
$string['deleteemailpostbutton'] = 'Delete and email';
$string['deleteemailpostdescription'] = 'Select to delete the post or delete and send a customisable email notification.';
$string['discovery'] = '{$a} usage';
$string['displayname'] = 'Alternate activity name (blank uses default)';
$string['displayname_default'] = 'blog';
$string['displayname_help'] = 'Set an alternate activity type name within the interface.

Leaving blank/empty will mean the default (\'blog\') is used.

The alternate name should start with a lower-case letter, this will be capitalised where needed.';
$string['displayperiod'] = 'Participation selector From date - To date.';
$string['displayperiod_help'] = '<p>The default selects all entries.</p>
<p>You can select \'From\' a date until todays entries.</p>
<p>You can select all entries between a \'From\' date and a \'To\' date.</p>
<p>Or you can select from the first entry \'To\' a date</p>';
$string['downloadcsv'] = 'Comma separated values text file';
$string['editpost'] = 'Update post';
$string['emailcontenthtml'] = 'This is a notification to advise you that your {$a->activityname} post with the
following details has been deleted by \'{$a->firstname} {$a->lastname}\':<br />
<br />
Subject: {$a->subject}<br />
{$a->activityname}: {$a->blog}<br />
Course: {$a->course}<br />
<br />
<a href={$a->deleteurl} title="view deleted post">View the deleted post</a>';
$string['emailerror'] = 'There was an error sending the email';
$string['emailmessage'] = 'Message';
$string['end'] = 'To';
$string['event:commentapproved'] = 'Comment approved';
$string['event:commentcreated'] = 'Comment created';
$string['event:commentdeleted'] = 'Comment deleted';
$string['event:participationviewed'] = 'Participation viewed';
$string['event:postcreated'] = 'Post created';
$string['event:postdeleted'] = 'Post deleted';
$string['event:postimported'] = 'Post imported';
$string['event:postupdated'] = 'Post updated';
$string['event:postviewed'] = 'Post viewed';
$string['event:savefailed'] = 'Session fail on post save';
$string['event:siteentriesviewed'] = 'Site entries viewed';
$string['exportedpost'] = 'Exported post';
$string['exportpostscomments'] = 'all currently visible posts and their comments.';
$string['exportuntitledpost'] = 'An untitled post';
$string['extra_emails'] = 'Email address of other recipients';
$string['extra_emails_help'] = 'Enter one or more email address(es) separated by spaces or semicolons.';
$string['feedhelp_help'] = 'If you use feeds you can add these Atom or RSS links in order to keep up to date with posts.
Most feed readers support Atom and RSS.

If comments are enabled there are also feeds for &lsquo;Comments only&rsquo;.';
$string['globalusageexclude'] = 'Exclude from global usage stats';
$string['globalusageexclude_desc'] = 'Comma-separated list of user ids to exclude users from the top usage stats list for global blog';
$string['grading'] = 'Grading';
$string['grading_help'] = 'If you select this option, a grade for this blog will be added
 to the course gradebook and calculated automatically.
 Leave this off for a non-assessed blog, or one you plan to assess manually.';
$string['grading_invalid'] = 'Posts can only be graded when either grade type or rating type are set.';
$string['group'] = 'Group';
$string['guestblog'] = 'If you have an account on the system, please
<a href=\'{$a}\'>log in for full access</a>.';
$string['import'] = 'Import';
$string['import_notallowed'] = 'Importing posts is disabled for this {$a}.';
$string['import_step0_blog'] = 'Import blog';
$string['import_step0_inst'] = 'From the list of blogs below, you may either import the entire blog or import selected posts.';
$string['import_step0_nonefound'] = 'You do not have access to any activities where posts can be imported from.';
$string['import_step0_numposts'] = '({$a} posts)';
$string['import_step0_selected_posts'] = 'Import selected posts';
$string['import_step1_addtag'] = 'Filter by tag - {$a}';
$string['import_step1_all'] = 'Select all';
$string['import_step1_from'] = 'Import from:';
$string['import_step1_include_label'] = 'Import post - {$a}';
$string['import_step1_inst'] = 'Select posts to import:';
$string['import_step1_none'] = 'Select none';
$string['import_step1_removetag'] = 'Remove tag filter - {$a}';
$string['import_step1_submit'] = 'Import';
$string['import_step1_table_include'] = 'Include in import';
$string['import_step1_table_posted'] = 'Date posted';
$string['import_step1_table_tags'] = 'Tags';
$string['import_step1_table_title'] = 'Title';
$string['import_step2_conflicts'] = '{$a} post(s) to import were identified as conflicts with existing posts.';
$string['import_step2_conflicts_submit'] = 'Import conflicting posts';
$string['import_step2_inst'] = 'Importing posts:';
$string['import_step2_none'] = 'No posts selected for import.';
$string['import_step2_prog'] = 'Importing in progress';
$string['import_step2_total'] = '{$a} post(s) imported successfully';
$string['includepost'] = 'Include post';
$string['info'] = 'Participation within the selected period.';
$string['introonpost'] = 'Show intro when posting';
$string['invalidblogtags'] = 'Invalid blog tags';
$string['lastcomment'] = '(latest comment by {$a->fullname}, {$a->timeposted})';
$string['lastmodified'] = 'Last post: {$a}';
$string['limits'] = 'Contribution time period';
$string['maxattachments'] = 'Maximum number of attachments';
$string['maxattachments_help'] = 'This setting specifies the maximum number of files that can be attached to a blog post.';
$string['maxattachmentsize'] = 'Maximum attachment size';
$string['maxattachmentsize_help'] = 'This setting specifies the largest size of image/file that can be used in a blog post.';
$string['maybehiddenposts'] = 'This {$a->name} might contain posts that are only
visible to logged-in users, or where only logged-in users can comment. If you
have an account on the system, please <a href=\'{$a->link}\'>log in for full access</a>.';
$string['modulename_help'] = 'This allows for the creation of blogs within a module (which are separate
to the core Moodle blog system). You can have module-wide blogs (everyone in the module posts to the same
blog), group blogs, or individual blogs. The blog activity can be renamed to reflect its purpose e.g. Learning Log.';
$string['mostcomments'] = 'Most comments';
$string['mostposts'] = 'Most posts';
$string['newcomment'] = 'New comment';
$string['newpost'] = 'New {$a} post';
$string['nograde'] = 'No grade (default)';
$string['noposts'] = 'There are no visible posts in this {$a}.';
$string['nopostsnotags'] = 'There are no visible posts in this {$a->blog}, for this tag {$a->tag}.';
$string['nousercommentpartsfound'] = 'No comments added in this period.';
$string['nousercommentsfound'] = 'No comments made during this period.';
$string['nousergrade'] = 'User grade not available.';
$string['nouserpostpartsfound'] = 'No posts made in this period.';
$string['nouserpostsfound'] = 'No posts made during this period.';
$string['numbercomments'] = '{$a} comments';
$string['numbercommentsmore'] = 'Plus {$a} more comments';
$string['numberposts'] = '{$a} posts';
$string['numberpostsmore'] = 'Plus {$a} more posts';
$string['numberviews'] = '{$a} views';
$string['official'] = 'Set';
$string['order'] = 'Order:';
$string['order_help'] = 'You can choose to order the display of the list of tags used,
either in alphabetical order or by number of posts used in.
Select the two links to switch between ordering methods,
this choice is remembered and will be used on subsequent views.';
$string['oublogallpostslogin'] = 'Force login on all posts page';
$string['oublogallpostslogin_desc'] = 'Enable to force login to the personal blog site entries page.
When enabled only logged-in users will see the link to this page.';
$string['oublogcrontask'] = 'OU blog maintenance jobs';
$string['oublog:exportposts'] = 'Export posts';
$string['oublog:ignorecommentperiod'] = 'Ignore comment time period';
$string['oublog:ignorepostperiod'] = 'Ignore post time period';
$string['oublogintro'] = 'Intro';
$string['oublog_managealerts'] = 'Manage reported post/comment alerts';
$string['oublog:rate'] = 'Can rate posts.';
$string['oublog:viewallratings'] = 'View all raw ratings given by individuals';
$string['oublog:viewanyrating'] = 'View total ratings that anyone received';
$string['oublog:viewprivate'] = 'View private posts in personal blogs';
$string['oublog:viewrating'] = 'View the total rating you received';
$string['participation_all'] = 'Participation - All time';
$string['participation_from'] = 'Participation - From {$a}';
$string['participation_fromto'] = 'Participation - From {$a->start} To {$a->end}';
$string['participation_to'] = 'Participation - To {$a}';
$string['postalert'] = 'Report post';
$string['postdetail'] = 'Post detail';
$string['postfrom'] = 'Posting only allowed from';
$string['postinfoblock'] = '<u>{$a->posttitle}</u> <br> <u>{$a->postdate}</u> <br> <u>{$a->sourcelink}</u>';
$string['postmessage'] = 'Post';
$string['posts_info_alltime'] = '{$a}s with the most number of posts';
$string['posts_info_thismonth'] = '{$a}s with the most number of posts in the past month';
$string['posts_info_thisyear'] = '{$a}s with the most number of posts in the past year';
$string['postuntil'] = 'Posting only allowed until';
$string['predefinedtags'] = 'Pre-defined tags';
$string['predefinedtags_help'] = 'Give users tags to choose from when entering a tag on a post.
Tags should be comma separated.';
$string['recentcomments'] = 'Recent comments';
$string['recentposts'] = 'Recent posts';
$string['remoteserver'] = 'Import from remote server';
$string['remotetoken'] = 'Import remote server token';
$string['removeblogs'] = 'Remove all blog entries';
$string['reportingemail'] = 'Reporting email addresses';
$string['reportingemail_help'] = 'This setting specifies the email addresses of those who will be informed
about issues with posts or comments within the OUBlog.
They should be entered as a comma separated list.';
$string['restricttags'] = 'Tag options';
$string['restricttags_help'] = 'If you select this option, you can restrict
tag entry to only those that are pre-defined at activity level and/or require that at least one tag be entered in a post.';
$string['restricttagslist'] = 'You may only enter the \'Set\' tags: {$a}';
$string['restricttags_req'] = 'Must enter tags';
$string['restricttags_req_set'] = 'Must enter pre-defined tags only';
$string['restricttags_set'] = 'Allow pre-defined tags only';
$string['restricttagsvalidation'] = 'Only \'Set\' tags are allowed to be entered';
$string['savefailnetwork'] = '<p>Unfortunately, your changes cannot be saved at this time.
This is due to a network error; the website is temporarily unavailable or you have been signed out. </p>
<p>Saving has been disabled on this blog.
In order to retain any changes you must copy the edited blog content,
access the Edit page again and then paste in your changes.</p>';
$string['savefailtitle'] = 'Post cannot be saved';
$string['searchblogs'] = 'Search';
$string['searchblogs_help'] = 'Type your search term and press Enter or click the button.

To search for exact phrases use quote marks.

To exclude a word insert a hyphen immediately before the word.

Example: the search term <tt>picasso -sculpture &quot;early works&quot;</tt> will return results for &lsquo;picasso&rsquo; or the phrase &lsquo;early works&rsquo; but will exclude items containing &lsquo;sculpture&rsquo;.';
$string['searchthisblog'] = 'Search this {$a}';
$string['sendanddelete'] = 'Send and delete';
$string['share'] = 'Share post';
$string['start'] = 'From';
$string['statblockon'] = 'Show blog usage extra statistics';
$string['statblockon_help'] = 'Enable extra statistics display in the Blog usage \'block\'.
Personal (global), Visible Individual and Visible Group blogs only.';
$string['strftimerecent'] = '%d %B %y, %H:%M';
$string['subscribefeed'] = 'Subscribe to a feed (requires appropriate software) to receive notification when this {$a} is updated.';
$string['tags_help'] = 'Tags are labels that help you find and categorise posts.';
$string['teachergrading'] = 'Teacher grades students';
$string['timefilter_alltime'] = 'All time';
$string['timefilter_close'] = 'Hide options';
$string['timefilter_label'] = 'Time period';
$string['timefilter_open'] = 'Show options';
$string['timefilter_submit'] = 'Update';
$string['timefilter_thismonth'] = 'Past month';
$string['timefilter_thisyear'] = 'Past year';
$string['timestartenderror'] = 'Selection end date cannot be earlier than the start date';
$string['tweet'] = 'Tweet';
$string['untitledcomment'] = 'Untitled comment';
$string['untitledpost'] = 'Untitled post';
$string['use'] = 'Most used';
$string['userrating'] = 'Use ratings';
$string['usersparticipation'] = 'All users participation';
$string['viewallparticipation'] = 'View all participation';
$string['viewmyparticipation'] = 'View my participation';
$string['views'] = 'Total visits to this {$a}:';
$string['visibility_help'] = '<p><strong>Visible to participants on this course</strong> &ndash; to view the post you must
have been granted access to the activity, usually by being enrolled on the course that contains it.</p>

<p><strong>Visible to everyone who is logged in to the system</strong> &ndash; everyone who is
logged in can view the post, even if they\'re not enrolled on a specific course.</p>
<p><strong>Visible to anyone in the world</strong> &ndash; any Internet user can see this post
if you give them the address.</p>';
$string['visits'] = 'Most visited';
$string['visits_info_active'] = 'Active {$a}s (contain a post in the past month) with the most number of visits';
$string['visits_info_alltime'] = '{$a}s with the most number of visits';