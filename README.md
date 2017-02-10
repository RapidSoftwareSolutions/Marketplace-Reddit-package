# Reddit Package
Reddit is a social news aggregation, web content rating, and discussion website.
* Domain: reddit.com
* Credentials: appClientId, appClientSecret

## How to get credentials: 
0. [Sign up or Log in](https://www.reddit.com/login) on reddit.com
1. On page [preferences/apps](https://www.reddit.com/prefs/apps/) create an app.
2. Fill all required fields and click create app.
3. In our package we using OAuth authentication, more details about how it work in Reddit you can read [HERE](https://github.com/reddit/reddit/wiki/OAuth2).
4. To get access token, which used in all blocks of package as required field, first of all you need redirect the user to this URL:
   * https://www.reddit.com/api/v1/authorize?client_id={CLIENT_ID}&response_type={TYPE}&state={RANDOM_STRING}&redirect_uri={URI}&duration={DURATION}&scope={SCOPE_STRING}
   * About link syntax you can read [HERE](https://github.com/reddit/reddit/wiki/OAuth2#authorization)
5. In redirect link, one of parameter will be "code", which we will use next.
6. Finally to get access token use "getAccessToken" block in this package.

## Reddit.getAccessToken
Get access token from code provided in the redirect described.

| Field          | Type       | Description
|----------------|------------|----------
| appClientId    | credentials| Id of your app.
| appClientSecret| credentials| Secret of your app.
| code           | String     | A one-time use code that may be exchanged for a bearer token.
| redirectUri    | String     | Redirect Uri from your app settings.

## Reddit.refreshAccessToken
Refresh access token.

| Field          | Type       | Description
|----------------|------------|----------
| appClientId    | credentials| Id of your app.
| appClientSecret| credentials| Secret of your app.
| refreshToken   | String     | The refresh token retrieved during the initial request for an access token.

## Reddit.revokeAccessToken
Manually revoking a token.

| Field          | Type       | Description
|----------------|------------|----------
| appClientId    | credentials| Id of your app.
| appClientSecret| credentials| Secret of your app.
| token          | String     | The access token or refresh token that the client wishes to revoke.
| tokenTypeHint  | String     | The type of token being revoked (refresh_token or access_token).

## Reddit.getMe
Gets information about the current user's account.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.getMyBlockedUsers
Gets a list of the current user's blocked users.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.
| show       | String     | (optional) the string all.

## Reddit.getMyFriends
Gets a list of the current user's friends.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.
| show       | String     | (optional) the string all.

## Reddit.getMyKarmaBreakdown
Gets karma breakdown of current user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.getMyPrefs
Gets current user's site preferences.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.getMyTrophies
Gets current user's trophies.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.clearFlairTemplates
Deletes all flair templates of the selected type from the selected subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of flairs to clear.
| flairType  | String     | One of (USER_FLAIR, LINK_FLAIR).

## Reddit.deleteUserFlair
Deletes a user's flair from the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit in which to delete user flair.
| name       | String     | Username of user whose flair to delete.

## Reddit.deleteFlairTemplate
Deletes the selected flair template from the specified subreddit.

| Field          | Type       | Description
|----------------|------------|----------
| appClientId    | credentials| Id of your app.
| accessToken    | String     | Access token.
| subreddit      | String     | Subreddit from which to delete flair template.
| flairTemplateId| String     | ID of template to delete.

## Reddit.assignUserFlair
Assigns the selected user custom flair text and CSS class in the specified subreddit. Mods only.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit in which to assign flair.
| name       | String     | Username of user to assign flair.
| text       | String     | Custom flair text (no longer than 64 characters).
| link       | String     | A fullname of a link.
| cssClass   | String     | A valid subreddit image name.

## Reddit.configureSubredditFlair
Updates all options in a subreddit's flair configuration.

| Field                     | Type       | Description
|---------------------------|------------|----------
| appClientId               | credentials| Id of your app.
| accessToken               | String     | Access token.
| subreddit                 | String     | Subreddit in which to configure flair.
| flairEnabled              | Boolean    | Whether or not user flair is displayed.
| flairPosition             | String     | On which side to display user flair. One of 'left' or 'right'.
| flairSelfAssignEnabled    | Boolean    | Whether or not users can select their own user flair.
| linkFlairPosition         | String     | On which side to display links' flair. One of 'left', 'right', or 'none'.
| linkFlairSelfAssignEnabled| Boolean    | Whether or not users can select their own links' flair.

## Reddit.getUserFlairList
Retrieves a list of all assigned user flair in the specified subreddit. Must be a mod of that subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Name of subreddit from which to retrieve flair list.
| name       | String     | A user by name.
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 1000.
| after      | String     | Use 'next' attribute of previous call to retrieve next page.
| before     | String     | Retrieve only flairs that are higher than this user ID on the list.

## Reddit.getUserFlairSelector
Gets current flair and a list of possible flairs for the specified user in the specified subreddit. Also useful for obtaining flair ID's.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit in which to view flair options.
| link       | String     | A fullname of a link.
| name       | String     | Username for whom to view selection. Defaults to current user.

## Reddit.addFlairTemplate
Adds or modifies a flair template in a subreddit.

| Field          | Type       | Description
|----------------|------------|----------
| appClientId    | credentials| Id of your app.
| accessToken    | String     | Access token.
| subreddit      | String     | Name of subreddit to add flair template.
| apiType        | String     | Specifies user or link flair template. One of 'link' or 'user'.
| text           | String     | Flair text (no longer than 64 characters).
| flairTemplateId| String     | The template ID of an existing flair to modify. If null, will add a new one.
| cssClass       | String     | Flair CSS class.
| textEditable   | Boolean    | Whether or not to allow users to edit the flair's text when assigning it.

## Reddit.selectUserFlair
Selects a user flair to use from the flair selection list.

| Field          | Type       | Description
|----------------|------------|----------
| appClientId    | credentials| Id of your app.
| accessToken    | String     | Access token.
| subreddit      | String     | Subreddit in which to select flair.
| name           | String     | Username of user to whom to apply flair.
| flairTemplateId| String     | Template ID of template to select. Null will remove the user's flair.
| text           | String     | Modified flair text, if allowed (no longer than 64 characters).

## Reddit.showMyFlair
Selects whether or not to show the current user's flair in the selected subreddit.

| Field       | Type       | Description
|-------------|------------|----------
| appClientId | credentials| Id of your app.
| accessToken | String     | Access token.
| subreddit   | String     | Subreddit in which to enable or disable flair.
| flairEnabled| Boolean    | True to show flair. False to hide flair.

#### Example of success response
```json
{
    "json": {
        "errors": []
    }
}
```

## Reddit.gild
Gild a link or comment, which gives the author reddit gold. Must have sufficient gold creddits. Reddit's documentation is odd, indicating that the thing ID is required both in the URL and the POST parameters.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| fullname   | String     | Fullname of a thing.

## Reddit.giveGold
Give the specified user the specified months of reddit gold. Must have sufficient gold creddits. Reddit's documentation is odd, indicating that the username is required both in the URL and the POST parameters.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user to whom to give gold.
| months     | Number     | Number of months to give reddit gold (between 1 and 36).

## Reddit.createComment
Submit a new comment or reply to a message..

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thingId    | String     | Thing ID of parent object on which to comment. Could be link, text post, or comment.
| text       | String     | Comment, raw markdown text.

## Reddit.delete
Deletes a post or comment.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to delete. Could be link, text post, or comment.

## Reddit.editText
Edits the text of a comment or text post.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thingId    | String     | Thing ID of text object to edit. Could be text post or comment.
| text       | String     | New text to replace the old (raw markdown).

## Reddit.hidePost
Hides a post from user's listings.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | A comma-separated list of link fullnames.

## Reddit.getInfo
Gives a listing of information on objects.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | A comma-separated list of thing.
| url        | String     | A valid URL.

## Reddit.lockThread
Lock a post and prevent any new comments by non-moderators.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of post to lock. Must be a post, not a comment.

## Reddit.markNSFW
Marks a post as NSFW.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of post to mark as NSFW.

## Reddit.getCommentChildren
Get comments in a tree that are hidden by "load more comments". NOTE: Only make one request for this at a time. Higher concurrency will result in an error.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| linkId     | String     | Fullname (thing ID) of link/post of the comment tree.
| children   | String     | A comma-delimited list of comment ID36s for which to retrieve children.
| sort       | String     | One of (confidence, top, new, controversial, old, random, qa, live).
| id         | String     | Id of the associated MoreChildren object.

## Reddit.report
Report a link, comment or message.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thingId    | String     | Thing ID of object to report.
| reason     | String     | The reason for the report. Must be <100 characters.
| otherReason| String     | The other reason for the report. Must be <100 characters.
| siteReason | String     | The site reason for the report. Must be <100 characters.

## Reddit.save
Save a link or comment. Saved things are kept in the user's saved listing for later perusal.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to save. Can be post or comment.
| category   | String     | Category in which to save object. Defaults to none.

## Reddit.getSavedCategories
Get a list of categories in which things are currently saved.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.sendInboxReplies
Toggles whether or not the current user should receive replies to a specific post or comment to their inbox.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to toggle.
| state      | Boolean    | State of inbox replies. True to receive, false for not.

## Reddit.setContestMode
Toggles contest mode on a post.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of post to toggle contest mode.
| state      | Boolean    | True to enable contest mode, false to disable.

## Reddit.stickyPost
Stickies a post at the top of the subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of post to sticky.
| num        | Number     | Position of new sticky. 1 for top, 2 for bottom. Defaults to 2.
| state      | Boolean    | State boolean value.

## Reddit.setSuggestedSort
Sets the default sort of a link's comments.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thing      | String     | Thing ID of link to set suggested sort.
| sort       | String     | Sort method. One of: 'confidence', 'top', 'new', 'hot', 'controversial', 'old', 'random', 'qa'

## Reddit.submitLinkPost
Submits a new link post.

| Field               | Type       | Description
|---------------------|------------|----------
| appClientId         | credentials| Id of your app.
| accessToken         | String     | Access token.
| sr                  | String     | Subreddit in which to post link.
| title               | String     | Title of the submission. up to 300 characters long.
| text                | String     | Raw markdown text of the submission.
| url                 | String     | Link to post.
| sendreplies         | Boolean    | Send comment replies to the current user's inbox. True to enable, false to disable.
| kind                | String     | One of (link, self, image).
| resubmit            | Boolean    | Boolean value.
| extension           | String     | Extension used for redirects.
| g-recaptcha-response| String     | Recaptcha response.
| app                 | String     | App.

## Reddit.unhidePost
Unhides a post from user's hidden posts.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | A comma-separated list of link fullnames to unhide.

## Reddit.unlockThread
Unlock a post and allow any new comments.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of post to unlock.

## Reddit.unmarkNSFW
Unmarks a post as NSFW.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of post to unmark as NSFW.

## Reddit.unsave
Unsaves a post or comment from the current user's saved posts.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to unsave. Can be post or comment.

## Reddit.upVote
Cast a vote on a thing.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to upvote.
| rank       | Number     | Upvote rank, an integer greater than 1.

## Reddit.downVote
Downvotes a post or comment.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to downvote.
| rank       | Number     | Downvote rank, an integer greater than 1.

## Reddit.unVote
Resets the current user's vote on a post or comment.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to unvote.
| rank       | Number     | Unvote rank, an integer greater than 1.

## Reddit.getLinksById
Retrieves a listing of links by their specified thing ID.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| names      | String     | A comma-separated list thing ID's of links to retrieve.

## Reddit.getComments
Retrieves a listing of comments and children for a link and optionally a specific comment

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit in which to assign comments.
| article    | String     | ID36 or fullname of link for comments to fetch.
| comment    | String     | Optional, ID36 or fullname of a single comment to fetch with children, much like permalink.
| context    | Number     | Number of levels up of parent comments to retrieve. Only applicable to child comments (between 0 and 8).
| depth      | Number     | Depth of child comments to retrieve.
| limit      | Number     | Limit of comments to retrieve.
| sort       | String     | How to sort the comments, one of 'confidence', 'top', 'new', 'hot', 'controversial', 'old', 'random', 'qa'
| showedits  | Boolean    | Show edited comments, perhaps? Not well documented by reddit.
| showmore   | Boolean    | Include links to show more comments, maybe? Not well documented by reddit.
| srDetail   | String     | Expand subreddits.

## Reddit.getDuplicateLinks
Retrieves the specified link and a listing of other links that are to duplicate destinations.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| article    | String     | ID36 or fullname of link to check for duplicates.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| limit      | Number     | Limit of duplicate links to retrieve (default: 25, maximum: 100).
| count      | Number     | A positive integer (default: 0).
| srDetail   | String     | Expand subreddits.
| show       | String     | (optional) the string all.

## Reddit.getHot
Retrieves the hot listing for the optionally specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of listing to retrieve. If none, defaults to front page.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| count      | Number     | A positive integer (default: 0).
| srDetail   | String     | Expand subreddits.
| show       | String     | (optional) the string all.

## Reddit.getControversial
Retrieves the controversial listing for the optionally specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of listing to retrieve. If none, defaults to front page.
| t          | String     | Time constraint for age of items on list. One of hour, day, week, month, year, all.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.
| show       | String     | (optional) the string all.

## Reddit.getNew
Retrieves the new listing for the optionally specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of listing to retrieve. If none, defaults to front page.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.

## Reddit.getRandom
Retrieves a random link from the optionally specified subreddit. If none, choose from any subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to retrieve a random link.

## Reddit.getTop
Retrieves the top listing for the optionally specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of listing to retrieve. If none, defaults to front page.
| t          | String     | Time constraint for age of items on list. One of 'hour', 'day', 'week', 'month', 'year', 'all'.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.

## Reddit.getRising
Retrieves the rising listing for the optionally specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of listing to retrieve. If none, defaults to front page.
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.

## Reddit.checkNeedsCaptcha
Check whether ReCAPTCHAs are needed for API methods.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.getLiveThread
Get a listing of live events by id.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| names      | String     | A comma-separated list of ids.

## Reddit.createLiveThread
Creates a new live thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| title      | String     | The thread's title (no longer than 120 characters).
| description| String     | The thread's description (raw markdown text).
| resources  | String     | The thread's resources section in the sidebar (raw markdown text).
| nsfw       | Boolean    | Whether or not the thread is NSFW. Prompts guests to continue when visiting.

## Reddit.getCurrentlyFeaturedLiveThread
Get some basic information about the currently featured live thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.acceptInvitationToThread
Accept a pending invitation to contribute to the thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.

## Reddit.closeThread
Permanently close the thread, disallowing future updates.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.

## Reddit.deleteUpdateFromThread
Delete an update from the thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| id         | String     | the ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.

## Reddit.editThread
Configure the thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| title      | String     | The thread's title (no longer than 120 characters).
| description| String     | The thread's description (raw markdown text).
| resources  | String     | The thread's resources section in the sidebar (raw markdown text).
| nsfw       | Boolean    | Whether or not the thread is NSFW. Prompts guests to continue when visiting.

## Reddit.inviteContributerToThread
Invite another user to contribute to the thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| name       | String     | The the name of an existing user.
| permissions| String     | Permission description e.g. +update,+edit,-manage.
| type       | String     | One of (liveupdate_contributor_invite, liveupdate_contributor).

## Reddit.leaveContributerFromThread
Abdicate contributorship of the thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.

## Reddit.reportThread
Report the thread for violating the rules of reddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| type       | String     | One of (spam, vote-manipulation, personal-information, sexualizing-minors, site-breaking).

## Reddit.revokeUserContributorship
Revoke another user's contributorship.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| id         | String     | Fullname of a account.

## Reddit.revokeContributorInvite
Revoke an outstanding contributor invite.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| id         | String     | Fullname of a account.

## Reddit.changeContributorPermissions
Change a contributor or contributor invite's permissions.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| name       | String     | The the name of an existing user.
| permissions| String     | Permission description e.g. +update,+edit,-manage.
| type       | String     | One of (liveupdate_contributor_invite, liveupdate_contributor).

## Reddit.postUpdateToThread
Post an update to the thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| body       | String     | Raw markdown text.

## Reddit.getThreadUpdates
Get a list of updates posted in this thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| after      | String     | The ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.
| before     | String     | The ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | The maximum number of items desired (default: 25, maximum: 100.
| stylesr    | String     | Subreddit name.
| isEmbed    | Boolean    | Is embed, internal use only.

## Reddit.getThreadContributers
Get a list of users that contribute to this thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.

## Reddit.getThreadSubmissions
Get a list of reddit submissions linking to this thread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| thread     | String     | The thread's name.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | The maximum number of items desired (default: 25, maximum: 100.
| srDetail   | String     | Expand subreddits.

## Reddit.collapseMessage
Collapse one or more messages in modmail.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Comma-separated thing ID's of messages to collapse.

## Reddit.composeMessage
Sends a message to a user or subreddit.

| Field               | Type       | Description
|---------------------|------------|----------
| appClientId         | credentials| Id of your app.
| accessToken         | String     | Access token.
| to                  | String     | Username or subreddit to send to.
| subject             | String     | Subject of message (no longer than 100 characters).
| text                | String     | Body of message (raw markdown text).
| fromSr              | String     | Optionally the name of the subreddit from which to send the message.
| g-recaptcha-response| String     | Recaptcha response.

## Reddit.deleteMessage
Deletes a message from the recipient's inbox. Be aware that messages sent both from and to yourself cannot be deleted.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | String Thing ID of message to delete.

## Reddit.markAllMessagesAsRead
Queues a job for all of your messages to be marked as read.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.

## Reddit.markMessageRead
Marks one or more messages as read.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | A comma-separated string of one or more message thing ID's (t4_).

## Reddit.unblockSubredditByMessage
Unblock a subreddit using a message they sent you.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of a message sent by the subreddit to unblock.

## Reddit.uncollapseMessage
Uncollapse one or more messages in modmail.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Comma-separated thing ID's of messages to uncollapse.

## Reddit.markMessageUnread
Marks one or more messages as unread.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | A comma-separated string of one or more message thing ID's (t4_).

## Reddit.getInbox
Retrieves the current user's personal message inbox.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| mark       | Boolean    | One of (true, false).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of the number of links to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.

## Reddit.getUnread
Retrieves the current user's unread personal messages.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| mark       | Boolean    | One of (true, false).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of the number of links to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.

## Reddit.getSent
Retrieves the current user's sent personal messages.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| mark       | Boolean    | One of (true, false).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of the number of links to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits.

## Reddit.getUserUpvoted
Obtain posts and comments upvoted by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserDownvoted
Obtain posts and comments downvoted by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserComments
Obtain only comments made by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserSubmitted
Obtain only posts made by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserGildingsGiven
Obtain posts and comments gilded (given) by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserGildingsReceived
Obtain posts and comments gilded (received) by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserSaved
Obtain posts and comments saved by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUserHidden
Obtain posts and comments hidden by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records. Defaults to the current user.
| show       | String     | One of (given).
| sort       | String     | One of (hot, new, top, controversial).
| t          | String     | One of (hour, day, week, month, year, all).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.searchSubredditsByName
List subreddit names that begin with a query string.

| Field                | Type       | Description
|----------------------|------------|----------
| appClientId          | credentials| Id of your app.
| accessToken          | String     | Access token.
| query                | String     | Search for subreddits that start with this. Maximum 50 characters, all printable.
| includeOver18        | Boolean    | Include subreddits that are set as NSFW (over_18).
| exact                | Boolean    | Only return exact match.
| includeUnadvertisable| Boolean    | Only return subreddits that have hide_ads set to True or are on the anti_ads_subreddits list.

## Reddit.getRecommendedSubreddits
Retrieve a list of recommended subreddits based on the names of existing ones.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| srnames    | String     | Comma-delimited list of subreddits on which to base recommendations.
| omit       | String     | Omit these specific subreddits from results (comma-delimited list of subreddit names).
| over18     | Boolean    | Include subreddits that are set as NSFW (over_18).

## Reddit.deleteSubredditImage
Remove an image from the subreddit's custom image set.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to remove the image.
| imageName  | String     | The name of the image to delete.

## Reddit.getWikiContributors
Retrieve a list of approved wiki contributors from the specified subreddit. Must be a mod or approved wiki contributor in subreddit. Using pagination will result in the last item of the previous page appearing as the first item of the next page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve approved wiki contributors.
| user       | String     | Jump to a specific user. Will return an empty list if user is not on list.
| show       | String     | One of (given).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getContributors
Retrieve a list of approved submitters from the specified subreddit. Must be a mod or approved submitter in subreddit. Using pagination will result in the last item of the previous page appearing as the first item of the next page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve approved wiki contributors.
| user       | String     | Jump to a specific user. Will return an empty list if user is not on list.
| show       | String     | One of (given).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getWikiBanned
Retrieve a list of wiki banned users from the specified subreddit. Must be a mod with access permissions. Using pagination will result in the last item of the previous page appearing as the first item of the next page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve wiki banned.
| user       | String     | Jump to a specific user. Will return an empty list if user is not on list.
| show       | String     | One of (given).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getModerators
Retrieve a list of moderators from the specified subreddit. Must have read access to subreddit. This function does not use pagination, but it's here anyway in case that's changed in the future.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve moderators.
| user       | String     | Jump to a specific user. Will return an empty list if user is not on list.
| show       | String     | One of (given).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getMuted
Retrieve a list of muted users from the specified subreddit. Must be a mod with access permissions. Using pagination will result in the last item of the previous page appearing as the first item of the next page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve mute.
| user       | String     | Jump to a specific user. Will return an empty list if user is not on list.
| show       | String     | One of (given).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getBanned
Retrieve a list of banned users from the specified subreddit. Must be a mod with access permissions. Using pagination will result in the last item of the previous page appearing as the first item of the next page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve banned.
| user       | String     | Jump to a specific user. Will return an empty list if user is not on list.
| show       | String     | One of (given).
| after      | String     | Get items lower on list than this entry. Does not mean chronologically.
| before     | String     | Get items higher on list than this entry. Does not mean chronologically.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.aboutSubreddit
Retrieves information about the specified subreddit, including subreddit ID.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve information.

## Reddit.deleteSubredditIcon
Remove the subreddit's custom mobile icon.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to remove the icon.

## Reddit.deleteSubredditHeaderImage
Remove the subreddit's custom header image.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to remove the header image.

## Reddit.deleteSubredditBanner
Remove the subreddit's custom mobile banner.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to remove the banner.

## Reddit.unblockUser
Unblock a user by username.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| name       | String     | Username of user to unblock.

## Reddit.removeFriend
Removes the specified user as a friend.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Username of user to remove.

## Reddit.addFriend
Adds the specified user as a friend.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| name       | String     | Username of friend to add.
| note       | String     | Note to add to friend record. Currently only available to those with reddit gold.

## Reddit.search
Perform a search query. Somewhat untested due to the complexity of and possible combinations to use in the search function.

| Field        | Type       | Description
|--------------|------------|----------
| appClientId  | credentials| Id of your app.
| accessToken  | String     | Access token.
| q            | String     | Query of which to search.
| subreddit    | String     | Subreddit to which to restrict search.
| sort         | String     | Sort results by one of 'relevance', 'hot', 'top', 'new', 'comments'. Defaults to 'relevance'.
| t            | String     | One of 'hour', 'day', 'week', 'month', 'year', 'all'. Defaults to all.
| type         | String     | Comma-delimited list of result types: 'sr', 'link', or null.
| includeFacets| Boolean    | Include facets.
| restrictSr   | Boolean    | Restrict subreddit.
| syntax       | String     | One of (cloudsearch, lucene, plain).
| after        | String     | Fullname of a thing.
| before       | String     | Fullname of a thing.
| count        | Number     | A positive integer (default: 0).
| limit        | Number     | The maximum number of items desired (default: 25, maximum: 100).
| srDetail     | String     | Expand subreddits (optional).

## Reddit.usernameAvailable
Presumably checks whether the specified username is available, but endpoint is not working at this time.

| Field | Type   | Description
|-------|--------|----------
| user  | String | Username to check for availability.

## Reddit.multiGetDescription
Get a multi's description.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.

## Reddit.multiEdit
Create or update a multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| displayName      | String     | A string no longer than 50 characters.
| descriptionMd    | String     | Multireddit sidebar text (raw markdown text).
| iconName         | String     | One of('art and design', 'ask', 'books', 'business', 'cars', 'comics', 'cute animals', 'diy', 'entertainment', 'food and drink', 'funny', 'games', 'grooming', 'health', 'life advice', 'military', 'models pinup', 'music', 'news', 'philosophy', 'pictures and gifs', 'science', 'shopping', 'sports', 'style', 'tech', 'travel', 'unusual stories', 'video', '', 'None').
| keyColor         | String     | A 6 - digit rgb hex color, e.g. '#AABBCC'.
| subredditsName   | String     | Comma-separated string of subreddits name.
| visibility       | String     | One of 'public', 'private', 'hidden'. Hidden multireddits will not be visible to you except through the API.
| weightingScheme  | String     | One of 'classic', 'fresh'.
| expandSrs        | Boolean    | Expand subreddits.

## Reddit.multiAddSubreddit
Add the specified subreddit to the specified multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| subredditName    | String     | Name of subreddit to add.

## Reddit.multiGetSubreddit
Get information about the specified subreddit in the specified multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| subredditName    | String     | Subreddit for which to obtain information.

## Reddit.multiRemoveSubreddit
Remove the specified subreddit from the specified multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| subredditName    | String     | Name of subreddit to remove.

## Reddit.multiEditDescription
Edit the description/sidebar for the specified multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| modelBodyMd      | String     | New description (raw markdown text).

## Reddit.getUserOverview
Obtain posts and comments made by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for whom to retrieve records.
| sort       | String     | Sorting method. One of 'hot', 'new', 'top', 'controversial', or null.
| show       | String     | One of (given).
| t          | String     | One of 'hour', 'day', 'week', 'month', 'year', 'all', or null.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getUser
Retrieve information about the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user to retrieve.

## Reddit.getUserTrophies
Get a user's trophies.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Username of user for whom to retrieve trophies.

## Reddit.multiGet
Fetch a multi's data and subreddit list by name.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| expandSrs        | Boolean    | Expand subreddits.

## Reddit.searchSubreddits
Search for subreddits by title and description.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| q          | String     | Query with which to search
| sort       | String     | Sorting method. One of 'relevance', 'activity'
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.leaveModerator
Abdicate moderator status in a subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Name of subreddit to leave.

## Reddit.getStickies
Retrieve a subreddit's stickied posts.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to retrieve sticky posts.
| num        | String     | Argument can be used to select a specific sticky (an integer between 1 and 2 (default: 1)).

## Reddit.leaveContributor
Abdicate approved submitter status in a subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Name of subreddit to leave.

## Reddit.multiDelete
Deletes the specified multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.

## Reddit.multiGetUser
Retrieves a list of multireddits owned by the specified user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| username   | String     | Username of user for which to retrieve owned multireddits.
| expandSrs  | Boolean    | Obtain extra details about the subreddits of each multireddit.

## Reddit.ignoreReports
Ignores reports for the specified thing.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to be ignored.

## Reddit.multiRename
Renames a multireddit.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| displayName      | String     | A string no longer than 50 characters.
| multiredditOwner | String     | Username of multireddit owner.
| from             | String     | Name of multireddit to rename.
| to               | String     | Destination name.

## Reddit.unmuteUserByMessage
Unmute a user from a subreddit based on the thing ID of a message they sent.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of the message author to be unmuted.

## Reddit.getPopularSubreddits
Retrieves a list of popular subreddits.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getMyModeratedSubreddits
Retrieve a list of the current user's subreddits in which they are a moderator.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.unignoreReports
Allow future reports on a thing to cause notifications.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to be unignored.

## Reddit.remove
Remove a link, comment, or modmail message.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to remove.
| spam       | Boolean    | Mark as spam.

## Reddit.getMyContributedSubreddits
Retrieve a list of the current user's subreddits in which they are an approved submitter.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getMySubscribedSubreddits
Retrieve a list of the current user's subscribed subreddits.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.multiCreate
Create a multi. Responds with 409 Conflict if it already exists.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multireddit      | String     | Multireddit name.
| multiredditOwner | String     | Username of multireddit owner.
| displayName      | String     | A string no longer than 50 characters.
| descriptionMd    | String     | Multireddit sidebar text (raw markdown text).
| iconName         | String     | One of('art and design', 'ask', 'books', 'business', 'cars', 'comics', 'cute animals', 'diy', 'entertainment', 'food and drink', 'funny', 'games', 'grooming', 'health', 'life advice', 'military', 'models pinup', 'music', 'news', 'philosophy', 'pictures and gifs', 'science', 'shopping', 'sports', 'style', 'tech', 'travel', 'unusual stories', 'video', '', 'None').
| keyColor         | String     | A 6 - digit rgb hex color, e.g. '#AABBCC'.
| subredditsName   | String     | Comma-separated string of subreddits name.
| visibility       | String     | One of 'public', 'private', 'hidden'. Hidden multireddits will not be visible to you except through the API.
| weightingScheme  | String     | One of 'classic', 'fresh'.
| expandSrs        | Boolean    | Expand subreddits.

## Reddit.muteUserByMessage
Mute a user from a subreddit based on the thing ID of a message they sent.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of the message author to be muted.

## Reddit.multiGetMine
Retrieves a list of multireddits that are owned by the current user.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| expandSrs  | Boolean    | Expand subreddits.

## Reddit.multiCopy
Copy an existing multireddit to your own set.

| Field            | Type       | Description
|------------------|------------|----------
| appClientId      | credentials| Id of your app.
| accessToken      | String     | Access token.
| multiredditOwner | String     | Username of multireddit owner.
| from             | String     | Name of multireddit to copy.
| to               | String     | Name of destination multireddit.
| displayName      | String     | A string no longer than 50 characters.

## Reddit.editSubreddit
Change a subreddit's configuration.

| Field                  | Type       | Description
|------------------------|------------|----------
| appClientId            | credentials| Id of your app.
| accessToken            | String     | Access token.
| name                   | String     | Subreddit name.
| publicDescription      | String     | Public description (raw markdown text).
| description            | String     | Raw markdown text.
| title                  | String     | A string no longer than 100 characters.
| header-title           | String     | A string no longer than 500 characters.
| sr                     | String     | Name of subreddit to change.
| themeSr                | String     | Subreddit name.
| lang                   | String     | A valid IETF language tag (underscore separated).
| commentScoreHideMins   | Number     | An integer between 0 and 1440 (default: 0).
| excludeBannedModqueue  | Boolean    | Exclude banned modqueue, boolean value.
| submitLinkLabel        | String     | A string no longer than 60 characters.
| submitText             | String     | Raw markdown text.
| submitTextLabel        | String     | A string no longer than 60 characters.
| suggestedCommentSort   | String     | One of (confidence, top, new, controversial, old, random, qa, live).
| linkType               | String     | One of (any, link, self).
| spamComments           | String     | One of (low, high, all).
| spamLinks              | String     | One of (low, high, all).
| spamSelfposts          | String     | One of (low, high, all).
| spoilersEnabled        | Boolean    | Spoilers enabled, boolean value.
| type                   | String     | One of (gold_restricted, archived, restricted, gold_only, employees_only, private, public).
| wikiEditAge            | Number     | An integer greater than 0 (default: 0).
| wikiEditKarma          | Number     | An integer greater than 0 (default: 0).
| wikimode               | String     | One of (disabled, modonly, anyone).
| allowImages            | Boolean    | Allow images, boolean value.
| allowTop               | Boolean    | Allow top, boolean value.
| hideAds                | Boolean    | Hide ads, boolean value.
| over18                 | Boolean    | Is over 18, boolean value.
| publicTraffic          | Boolean    | Public traffic, boolean value.
| showMedia              | Boolean    | Show media, boolean value.
| showMediaPreview       | Boolean    | Show media preview, boolean value.
| collapseDeletedComments| Boolean    | Collapse deleted comments, boolean value.
| themeSrUpdate          | Boolean    | Theme subreddit update, boolean value.
| g-recaptcha-response   | String     | Recaptcha response.

## Reddit.getDefaultSubreddits
Retrieves a list of default subreddits.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getGoldOnlySubreddits
Retrieves a list of gold-only subreddits.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getNewSubreddits
Retrieves a list of new subreddits.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.getSubredditSidebar
Get a subreddit's sidebar contents.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of which to retrieve sidebar.

## Reddit.getSubredditSettings
Retrieve a list of the subreddit's settings. Must be a moderator.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | The subreddit to retrieve.

## Reddit.getModerationLog
Retrieves recent entries from the moderation log for the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of log to retrieve. All moderated subreddits by default.
| mod        | String     | Filter by moderator.
| type       | String     | Filter by mod action, one of (banuser, unbanuser, removelink, approvelink, removecomment, approvecomment, addmoderator, invitemoderator, uninvitemoderator, acceptmoderatorinvite, removemoderator, addcontributor, removecontributor, editsettings, editflair, distinguish, marknsfw, wikibanned, wikicontributor, wikiunbanned, wikipagelisted, removewikicontributor, wikirevise, wikipermlevel, ignorereports, unignorereports, setpermissions, setsuggestedsort, sticky, unsticky, setcontestmode, unsetcontestmode, lock, unlock, muteuser, unmuteuser, createrule, editrule, deleterule, spoiler, unspoiler, modmail_enrollment).
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.searchSubredditsByTopic
Search for subreddits by topic keywords.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| query      | String     | Query with which to search.

## Reddit.setSubredditStylesheet
Set a subreddit's stylesheet.

| Field             | Type       | Description
|-------------------|------------|----------
| appClientId       | credentials| Id of your app.
| accessToken       | String     | Access token.
| subreddit         | String     | Subreddit of which to set stylesheet.
| stylesheetContents| String     | Contents of stylesheet, probably pretty long.
| reason            | String     | Since the stylesheet is a wiki page, optionally provide a reason for editing.

## Reddit.getSubmitText
Retrieves the "submitting to /r/&subreddit" text for the selected subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Name of subreddit from which to obtain submit text.

## Reddit.createSubreddit
Create a new subreddit.

| Field                  | Type       | Description
|------------------------|------------|----------
| appClientId            | credentials| Id of your app.
| accessToken            | String     | Access token.
| sr                     | String     | Name of subreddit to change.
| name                   | String     | Subreddit name.
| publicDescription      | String     | Public description (raw markdown text).
| description            | String     | Raw markdown text.
| title                  | String     | A string no longer than 100 characters.
| header-title           | String     | A string no longer than 500 characters.
| themeSr                | String     | Subreddit name.
| lang                   | String     | A valid IETF language tag (underscore separated).
| commentScoreHideMins   | Number     | An integer between 0 and 1440 (default: 0).
| excludeBannedModqueue  | Boolean    | Exclude banned modqueue, boolean value.
| submitLinkLabel        | String     | A string no longer than 60 characters.
| submitText             | String     | Raw markdown text.
| submitTextLabel        | String     | A string no longer than 60 characters.
| suggestedCommentSort   | String     | One of (confidence, top, new, controversial, old, random, qa, live).
| linkType               | String     | One of (any, link, self).
| spamComments           | String     | One of (low, high, all).
| spamLinks              | String     | One of (low, high, all).
| spamSelfposts          | String     | One of (low, high, all).
| spoilersEnabled        | Boolean    | Spoilers enabled, boolean value.
| type                   | String     | One of (gold_restricted, archived, restricted, gold_only, employees_only, private, public).
| wikiEditAge            | Number     | An integer greater than 0 (default: 0).
| wikiEditKarma          | Number     | An integer greater than 0 (default: 0).
| wikimode               | String     | One of (disabled, modonly, anyone).
| allowImages            | Boolean    | Allow images, boolean value.
| allowTop               | Boolean    | Allow top, boolean value.
| hideAds                | Boolean    | Hide ads, boolean value.
| over18                 | Boolean    | Is over 18, boolean value.
| publicTraffic          | Boolean    | Public traffic, boolean value.
| showMedia              | Boolean    | Show media, boolean value.
| showMediaPreview       | Boolean    | Show media preview, boolean value.
| collapseDeletedComments| Boolean    | Collapse deleted comments, boolean value.
| themeSrUpdate          | Boolean    | Theme subreddit update, boolean value.
| g-recaptcha-response   | String     | Recaptcha response.

## Reddit.getSubredditStylesheet
Get a subreddit's stylesheet.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of which to retrieve stylesheet.

## Reddit.subscribe
Subscribe to a subreddit. Must have read access to the subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit to which to subscribe.

## Reddit.unsubscribe
Unsubscribe from a subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit from which to unsubscribe.

## Reddit.uploadSubredditImage
Upload an image to the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit to which to upload image.
| file       | String     | Relative or absolute path of file (maximum size of 500 KiB).
| name       | String     | If &upload_type is 'img', assign the image this name. Ignored otherwise.
| uploadType | String     | One of 'img', 'header', 'icon', 'banner'.
| imageType  | String     | One of 'png' or 'jpg'.

## Reddit.distinguish
Mod distinguish a post or comment.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to distinguish.
| how        | Boolean    | True to set [M] distinguish. False to undistinguish.

## Reddit.approve
Marks the specified thing as approved.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| id         | String     | Thing ID of object to be approved.

## Reddit.acceptModeratorInvite
Accepts a moderator invitation for the specified subreddit. You must have a pending invitation for that subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit to accept invitation.

## Reddit.getUnmoderated
Retrieves a list of things that have not been moderated in the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of items to retrieve. All moderated subreddits by default.
| only       | String     | One of (links, comments).
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.wikiAllowEditor
Allow the specified user to edit the specified wiki page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of the wiki page.
| username   | String     | Username of user to allow.
| page       | String     | Name of page to allow user to edit.

## Reddit.wikiDisallowEditor
Remove the specified user from the allowed editors list of the specified wiki page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of the wiki page.
| username   | String     | Username of user to allow.
| page       | String     | Name of page to disallow user to edit.

## Reddit.wikiGetPages
Retrieves a list of all pages of the specified subreddit's wiki.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve pages.

## Reddit.wikiGetPage
Retrieves the specified wiki page, optionally at a specific revision or a comparison between revisions.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit in which to retrieve page.
| page       | String     | Page to retrieve.
| v          | String     | Specific revision ID to retrieve (optional).
| v2         | String     | ID of revision with which to compare &v (optional2).

## Reddit.wikiGetRevisions
Retrieves a listing of wiki revisions for all pages within the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve revisions.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.wikiGetPageRevisions
Retrieves a listing of wiki revisions for the specified page within the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit for which to retrieve revisions.
| page       | String     | Page for which to retrieve revisions.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.wikiEditPage
Edit a wiki page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit in which to edit page.
| page       | String     | Page to edit.
| content    | String     | Content with which to overwrite page.
| reason     | String     | Reason for revision (up to 256 characters long).
| previous   | String     | Revision ID on which to base this edit.

## Reddit.wikiToggleHideRevision
Toggle a revision's status of hidden.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of revision.
| page       | String     | Pagename of revision.
| revision   | String     | ID of revision to toggle hidden status.

## Reddit.wikiRevertToRevision
Revert a wiki page to a previous revision.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of revision.
| page       | String     | Pagename of revision.
| revision   | String     | ID of revision to which to revert.

## Reddit.wikiGetPageDiscussions
Retrieves a listing of discussions about a certain wiki page.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of page.
| page       | String     | Page for which to retrieve discussions.
| after      | String     | Fullname of a thing.
| before     | String     | Fullname of a thing.
| count      | Number     | A positive integer (default: 0).
| limit      | Number     | Upper limit of number of items to retrieve. Maximum is 100.
| srDetail   | String     | Expand subreddits (optional).

## Reddit.wikiGetPageSettings
Get the specified page's settings in the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of page.
| page       | String     | Name of page.

## Reddit.wikiUpdatePageSettings
Update the specified page's settings in the specified subreddit.

| Field      | Type       | Description
|------------|------------|----------
| appClientId| credentials| Id of your app.
| accessToken| String     | Access token.
| subreddit  | String     | Subreddit of page.
| page       | String     | Name of page.
| permlevel  | Number     | Permissions level for page. 0 for use subreddit wiki permissions, 1 for only approved editors, 2 for only mods, null to not update.
| listed     | Boolean    | Show this page on the list of wiki pages. True to show, false to hide, null to not update.

