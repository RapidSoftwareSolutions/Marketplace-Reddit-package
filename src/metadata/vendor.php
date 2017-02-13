<?php

return array (
    'package' => 'Reddit',
    'tagline' => 'Reddit is a social news aggregation, web content rating, and discussion website.',
    'description' => 'Reddit is a social news aggregation, web content rating, and discussion website.',
    'image' => 'https://logo.clearbit.com/reddit.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Reddit-package',
    'keywords' => array (
        'API', 'social', 'news', 'aggregation', 'Reddit',
    ),
    'accounts' => array (
        'domain' => 'reddit.com',
        'credentials' => array (
            'appClientId', 'appClientSecret',
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'getAccessToken',
            'description' => 'Get access token from code provided in the redirect described.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'appClientSecret',
                    'type' => 'credentials',
                    'info' => 'Secret of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'code',
                    'type' => 'String',
                    'info' => 'A one-time use code that may be exchanged for a bearer token.',
                    'required' => true,
                ),
                array (
                    'name' => 'redirectUri',
                    'type' => 'String',
                    'info' => 'Redirect Uri from your app settings.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'refreshAccessToken',
            'description' => 'Refresh access token.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'appClientSecret',
                    'type' => 'credentials',
                    'info' => 'Secret of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'refreshToken',
                    'type' => 'String',
                    'info' => 'The refresh token retrieved during the initial request for an access token.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'revokeAccessToken',
            'description' => 'Manually revoking a token.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'appClientSecret',
                    'type' => 'credentials',
                    'info' => 'Secret of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'token',
                    'type' => 'String',
                    'info' => 'The access token or refresh token that the client wishes to revoke.',
                    'required' => true,
                ),
                array (
                    'name' => 'tokenTypeHint',
                    'type' => 'String',
                    'info' => 'The type of token being revoked (refresh_token or access_token).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMe',
            'description' => 'Gets information about the current user\'s account.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyBlockedUsers',
            'description' => 'Gets a list of the current user\'s blocked users.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of duplicate links to retrieve (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyFriends',
            'description' => 'Gets a list of the current user\'s friends.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of duplicate links to retrieve (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyKarmaBreakdown',
            'description' => 'Gets karma breakdown of current user.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyPrefs',
            'description' => 'Gets current user\'s site preferences.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyTrophies',
            'description' => 'Gets current user\'s trophies.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'clearFlairTemplates',
            'description' => 'Deletes all flair templates of the selected type from the selected subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of flairs to clear.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairType',
                    'type' => 'String',
                    'info' => 'One of (USER_FLAIR, LINK_FLAIR).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteUserFlair',
            'description' => 'Deletes a user\'s flair from the specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to delete user flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user whose flair to delete.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteFlairTemplate',
            'description' => 'Deletes the selected flair template from the specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to delete flair template.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairTemplateId',
                    'type' => 'String',
                    'info' => 'ID of template to delete.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'assignUserFlair',
            'description' => 'Assigns the selected user custom flair text and CSS class in the specified subreddit. Mods only.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to assign flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user to assign flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Custom flair text (no longer than 64 characters).',
                    'required' => false,
                ),
                array (
                    'name' => 'link',
                    'type' => 'String',
                    'info' => 'A fullname of a link.',
                    'required' => false,
                ),
                array (
                    'name' => 'cssClass',
                    'type' => 'String',
                    'info' => 'A valid subreddit image name.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'configureSubredditFlair',
            'description' => 'Updates all options in a subreddit\'s flair configuration.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to configure flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairEnabled',
                    'type' => 'Boolean',
                    'info' => 'Whether or not user flair is displayed.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairPosition',
                    'type' => 'String',
                    'info' => 'On which side to display user flair. One of \'left\' or \'right\'.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairSelfAssignEnabled',
                    'type' => 'Boolean',
                    'info' => 'Whether or not users can select their own user flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'linkFlairPosition',
                    'type' => 'String',
                    'info' => 'On which side to display links\' flair. One of \'left\', \'right\', or \'none\'.',
                    'required' => true,
                ),
                array (
                    'name' => 'linkFlairSelfAssignEnabled',
                    'type' => 'Boolean',
                    'info' => 'Whether or not users can select their own links\' flair.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserFlairList',
            'description' => 'Retrieves a list of all assigned user flair in the specified subreddit. Must be a mod of that subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Name of subreddit from which to retrieve flair list.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'A user by name.',
                    'required' => true,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 1000.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Use \'next\' attribute of previous call to retrieve next page.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Retrieve only flairs that are higher than this user ID on the list.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserFlairSelector',
            'description' => 'Gets current flair and a list of possible flairs for the specified user in the specified subreddit. Also useful for obtaining flair ID\'s.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to view flair options.',
                    'required' => true,
                ),
                array (
                    'name' => 'link',
                    'type' => 'String',
                    'info' => 'A fullname of a link.',
                    'required' => false,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username for whom to view selection. Defaults to current user.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addFlairTemplate',
            'description' => 'Adds or modifies a flair template in a subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Name of subreddit to add flair template.',
                    'required' => true,
                ),
                array (
                    'name' => 'apiType',
                    'type' => 'String',
                    'info' => 'Specifies user or link flair template. One of \'link\' or \'user\'.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Flair text (no longer than 64 characters).',
                    'required' => false,
                ),
                array (
                    'name' => 'flairTemplateId',
                    'type' => 'String',
                    'info' => 'The template ID of an existing flair to modify. If null, will add a new one.',
                    'required' => false,
                ),
                array (
                    'name' => 'cssClass',
                    'type' => 'String',
                    'info' => 'Flair CSS class.',
                    'required' => false,
                ),
                array (
                    'name' => 'textEditable',
                    'type' => 'Boolean',
                    'info' => 'Whether or not to allow users to edit the flair\'s text when assigning it.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'selectUserFlair',
            'description' => 'Selects a user flair to use from the flair selection list.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to select flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user to whom to apply flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairTemplateId',
                    'type' => 'String',
                    'info' => 'Template ID of template to select. Null will remove the user\'s flair.',
                    'required' => false,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Modified flair text, if allowed (no longer than 64 characters).',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'showMyFlair',
            'description' => 'Selects whether or not to show the current user\'s flair in the selected subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to enable or disable flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairEnabled',
                    'type' => 'Boolean',
                    'info' => 'True to show flair. False to hide flair.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'gild',
            'description' => 'Gild a link or comment, which gives the author reddit gold. Must have sufficient gold creddits. Reddit\'s documentation is odd, indicating that the thing ID is required both in the URL and the POST parameters.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'fullname',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'giveGold',
            'description' => 'Give the specified user the specified months of reddit gold. Must have sufficient gold creddits. Reddit\'s documentation is odd, indicating that the username is required both in the URL and the POST parameters.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user to whom to give gold.',
                    'required' => true,
                ),
                array (
                    'name' => 'months',
                    'type' => 'Number',
                    'info' => 'Number of months to give reddit gold (between 1 and 36).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createComment',
            'description' => 'Submit a new comment or reply to a message..',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thingId',
                    'type' => 'String',
                    'info' => 'Thing ID of parent object on which to comment. Could be link, text post, or comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Comment, raw markdown text.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'delete',
            'description' => 'Deletes a post or comment.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to delete. Could be link, text post, or comment.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'editText',
            'description' => 'Edits the text of a comment or text post.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thingId',
                    'type' => 'String',
                    'info' => 'Thing ID of text object to edit. Could be text post or comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'New text to replace the old (raw markdown).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'hidePost',
            'description' => 'Hides a post from user\'s listings.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated list of link fullnames.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInfo',
            'description' => 'Gives a listing of information on objects.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated list of thing.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'A valid URL.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'lockThread',
            'description' => 'Lock a post and prevent any new comments by non-moderators.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to lock. Must be a post, not a comment.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markNSFW',
            'description' => 'Marks a post as NSFW.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to mark as NSFW.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCommentChildren',
            'description' => 'Get comments in a tree that are hidden by \"load more comments\". NOTE: Only make one request for this at a time. Higher concurrency will result in an error.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'linkId',
                    'type' => 'String',
                    'info' => 'Fullname (thing ID) of link/post of the comment tree.',
                    'required' => true,
                ),
                array (
                    'name' => 'children',
                    'type' => 'String',
                    'info' => 'A comma-delimited list of comment ID36s for which to retrieve children.',
                    'required' => true,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (confidence, top, new, controversial, old, random, qa, live).',
                    'required' => false,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Id of the associated MoreChildren object.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'report',
            'description' => 'Report a link, comment or message.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thingId',
                    'type' => 'String',
                    'info' => 'Thing ID of object to report.',
                    'required' => true,
                ),
                array (
                    'name' => 'reason',
                    'type' => 'String',
                    'info' => 'The reason for the report. Must be <100 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'otherReason',
                    'type' => 'String',
                    'info' => 'The other reason for the report. Must be <100 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'siteReason',
                    'type' => 'String',
                    'info' => 'The site reason for the report. Must be <100 characters.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'save',
            'description' => 'Save a link or comment. Saved things are kept in the user\'s saved listing for later perusal.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to save. Can be post or comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'category',
                    'type' => 'String',
                    'info' => 'Category in which to save object. Defaults to none.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSavedCategories',
            'description' => 'Get a list of categories in which things are currently saved.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'sendInboxReplies',
            'description' => 'Toggles whether or not the current user should receive replies to a specific post or comment to their inbox.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to toggle.',
                    'required' => true,
                ),
                array (
                    'name' => 'state',
                    'type' => 'Boolean',
                    'info' => 'State of inbox replies. True to receive, false for not.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'setContestMode',
            'description' => 'Toggles contest mode on a post.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to toggle contest mode.',
                    'required' => true,
                ),
                array (
                    'name' => 'state',
                    'type' => 'Boolean',
                    'info' => 'True to enable contest mode, false to disable.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'stickyPost',
            'description' => 'Stickies a post at the top of the subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to sticky.',
                    'required' => true,
                ),
                array (
                    'name' => 'num',
                    'type' => 'Number',
                    'info' => 'Position of new sticky. 1 for top, 2 for bottom. Defaults to 2.',
                    'required' => false,
                ),
                array (
                    'name' => 'state',
                    'type' => 'Boolean',
                    'info' => 'State boolean value.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'setSuggestedSort',
            'description' => 'Sets the default sort of a link\'s comments.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thing',
                    'type' => 'String',
                    'info' => 'Thing ID of link to set suggested sort.',
                    'required' => true,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'Sort method. One of: \'confidence\', \'top\', \'new\', \'hot\', \'controversial\', \'old\', \'random\', \'qa\'',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createPost',
            'description' => 'Submits a new link post.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'sr',
                    'type' => 'String',
                    'info' => 'Subreddit in which to post link.',
                    'required' => true,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'Title of the submission. up to 300 characters long.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Raw markdown text of the submission.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'Link to post.',
                    'required' => true,
                ),
                array (
                    'name' => 'sendreplies',
                    'type' => 'Boolean',
                    'info' => 'Send comment replies to the current user\'s inbox. True to enable, false to disable.',
                    'required' => false,
                ),
                array (
                    'name' => 'kind',
                    'type' => 'String',
                    'info' => 'One of (link, self, image).',
                    'required' => false,
                ),
                array (
                    'name' => 'resubmit',
                    'type' => 'Boolean',
                    'info' => 'Boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'extension',
                    'type' => 'String',
                    'info' => 'Extension used for redirects.',
                    'required' => false,
                ),
                array (
                    'name' => 'g-recaptcha-response',
                    'type' => 'String',
                    'info' => 'Recaptcha response.',
                    'required' => false,
                ),
                array (
                    'name' => 'app',
                    'type' => 'String',
                    'info' => 'App.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unhidePost',
            'description' => 'Unhides a post from user\'s hidden posts.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated list of link fullnames to unhide.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unlockThread',
            'description' => 'Unlock a post and allow any new comments.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to unlock.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unmarkNSFW',
            'description' => 'Unmarks a post as NSFW.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to unmark as NSFW.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unsave',
            'description' => 'Unsaves a post or comment from the current user\'s saved posts.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to unsave. Can be post or comment.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'upVote',
            'description' => 'Cast a vote on a thing.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to upvote.',
                    'required' => true,
                ),
                array (
                    'name' => 'rank',
                    'type' => 'Number',
                    'info' => 'Upvote rank, an integer greater than 1.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'downVote',
            'description' => 'Downvotes a post or comment.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to downvote.',
                    'required' => true,
                ),
                array (
                    'name' => 'rank',
                    'type' => 'Number',
                    'info' => 'Downvote rank, an integer greater than 1.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unVote',
            'description' => 'Resets the current user\'s vote on a post or comment.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to unvote.',
                    'required' => true,
                ),
                array (
                    'name' => 'rank',
                    'type' => 'Number',
                    'info' => 'Unvote rank, an integer greater than 1.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getLinksById',
            'description' => 'Retrieves a listing of links by their specified thing ID.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'names',
                    'type' => 'String',
                    'info' => 'A comma-separated list thing ID\'s of links to retrieve.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getComments',
            'description' => 'Retrieves a listing of comments and children for a link and optionally a specific comment',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to assign comments.',
                    'required' => false,
                ),
                array (
                    'name' => 'article',
                    'type' => 'String',
                    'info' => 'ID of link, without prefix, for comments fetch.',
                    'required' => true,
                ),
                array (
                    'name' => 'comment',
                    'type' => 'String',
                    'info' => 'Optional, ID36 or fullname of a single comment to fetch with children, much like permalink.',
                    'required' => false,
                ),
                array (
                    'name' => 'context',
                    'type' => 'Number',
                    'info' => 'Number of levels up of parent comments to retrieve. Only applicable to child comments (between 0 and 8).',
                    'required' => false,
                ),
                array (
                    'name' => 'depth',
                    'type' => 'Number',
                    'info' => 'Depth of child comments to retrieve.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of comments to retrieve.',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'How to sort the comments, one of \'confidence\', \'top\', \'new\', \'hot\', \'controversial\', \'old\', \'random\', \'qa\'',
                    'required' => false,
                ),
                array (
                    'name' => 'showedits',
                    'type' => 'Boolean',
                    'info' => 'Show edited comments, perhaps? Not well documented by reddit.',
                    'required' => false,
                ),
                array (
                    'name' => 'showmore',
                    'type' => 'Boolean',
                    'info' => 'Include links to show more comments, maybe? Not well documented by reddit.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getDuplicateLinks',
            'description' => 'Retrieves the specified link and a listing of other links that are to duplicate destinations.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'article',
                    'type' => 'String',
                    'info' => 'ID of link, without prefix, to check for duplicates.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of duplicate links to retrieve (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getHot',
            'description' => 'Retrieves the hot listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getControversial',
            'description' => 'Retrieves the controversial listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => true,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'Time constraint for age of items on list. One of hour, day, week, month, year, all.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getNew',
            'description' => 'Retrieves the new listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRandom',
            'description' => 'Retrieves a random link from the optionally specified subreddit. If none, choose from any subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to retrieve a random link.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getTop',
            'description' => 'Retrieves the top listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => true,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'Time constraint for age of items on list. One of \'hour\', \'day\', \'week\', \'month\', \'year\', \'all\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRising',
            'description' => 'Retrieves the rising listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'checkNeedsCaptcha',
            'description' => 'Check whether ReCAPTCHAs are needed for API methods.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getLiveThread',
            'description' => 'Get a listing of live events by id.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'names',
                    'type' => 'String',
                    'info' => 'A comma-separated list of ids.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createLiveThread',
            'description' => 'Creates a new live thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'The thread\'s title (no longer than 120 characters).',
                    'required' => true,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'The thread\'s description (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'resources',
                    'type' => 'String',
                    'info' => 'The thread\'s resources section in the sidebar (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'nsfw',
                    'type' => 'Boolean',
                    'info' => 'Whether or not the thread is NSFW. Prompts guests to continue when visiting.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCurrentlyFeaturedLiveThread',
            'description' => 'Get some basic information about the currently featured live thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'acceptInvitationToThread',
            'description' => 'Accept a pending invitation to contribute to the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'closeThread',
            'description' => 'Permanently close the thread, disallowing future updates.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteUpdateFromThread',
            'description' => 'Delete an update from the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'the ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'editThread',
            'description' => 'Configure the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'The thread\'s title (no longer than 120 characters).',
                    'required' => false,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'The thread\'s description (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'resources',
                    'type' => 'String',
                    'info' => 'The thread\'s resources section in the sidebar (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'nsfw',
                    'type' => 'Boolean',
                    'info' => 'Whether or not the thread is NSFW. Prompts guests to continue when visiting.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'inviteContributerToThread',
            'description' => 'Invite another user to contribute to the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The the name of an existing user.',
                    'required' => true,
                ),
                array (
                    'name' => 'permissions',
                    'type' => 'String',
                    'info' => 'Permission description e.g. +update,+edit,-manage.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (liveupdate_contributor_invite, liveupdate_contributor).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'leaveContributerFromThread',
            'description' => 'Abdicate contributorship of the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'reportThread',
            'description' => 'Report the thread for violating the rules of reddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (spam, vote-manipulation, personal-information, sexualizing-minors, site-breaking).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'revokeUserContributorship',
            'description' => 'Revoke another user\'s contributorship.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Fullname of a account.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'revokeContributorInvite',
            'description' => 'Revoke an outstanding contributor invite.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Fullname of a account.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'changeContributorPermissions',
            'description' => 'Change a contributor or contributor invite\'s permissions.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The the name of an existing user.',
                    'required' => true,
                ),
                array (
                    'name' => 'permissions',
                    'type' => 'String',
                    'info' => 'Permission description e.g. +update,+edit,-manage.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (liveupdate_contributor_invite, liveupdate_contributor).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'postUpdateToThread',
            'description' => 'Post an update to the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'Raw markdown text.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getThreadUpdates',
            'description' => 'Get a list of updates posted in this thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'The ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'The ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The maximum number of items desired (default: 25, maximum: 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'stylesr',
                    'type' => 'String',
                    'info' => 'Subreddit name.',
                    'required' => false,
                ),
                array (
                    'name' => 'isEmbed',
                    'type' => 'Boolean',
                    'info' => 'Is embed, internal use only.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getThreadContributers',
            'description' => 'Get a list of users that contribute to this thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getThreadSubmissions',
            'description' => 'Get a list of reddit submissions linking to this thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The maximum number of items desired (default: 25, maximum: 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'collapseMessage',
            'description' => 'Collapse one or more messages in modmail.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Comma-separated thing ID\'s of messages to collapse.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'composeMessage',
            'description' => 'Sends a message to a user or subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'Username or subreddit to send to.',
                    'required' => true,
                ),
                array (
                    'name' => 'subject',
                    'type' => 'String',
                    'info' => 'Subject of message (no longer than 100 characters).',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Body of message (raw markdown text).',
                    'required' => true,
                ),
                array (
                    'name' => 'fromSr',
                    'type' => 'String',
                    'info' => 'Optionally the name of the subreddit from which to send the message.',
                    'required' => false,
                ),
                array (
                    'name' => 'g-recaptcha-response',
                    'type' => 'String',
                    'info' => 'Recaptcha response.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteMessage',
            'description' => 'Deletes a message from the recipient\'s inbox. Be aware that messages sent both from and to yourself cannot be deleted.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'String Thing ID of message to delete.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markAllMessagesAsRead',
            'description' => 'Queues a job for all of your messages to be marked as read.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markMessageRead',
            'description' => 'Marks one or more messages as read.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated string of one or more message thing ID\'s (t4_).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unblockSubredditByMessage',
            'description' => 'Unblock a subreddit using a message they sent you.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of a message sent by the subreddit to unblock.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'uncollapseMessage',
            'description' => 'Uncollapse one or more messages in modmail.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Comma-separated thing ID\'s of messages to uncollapse.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markMessageUnread',
            'description' => 'Marks one or more messages as unread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated string of one or more message thing ID\'s (t4_).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInbox',
            'description' => 'Retrieves the current user\'s personal message inbox.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'mark',
                    'type' => 'Boolean',
                    'info' => 'One of (true, false).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of the number of links to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUnread',
            'description' => 'Retrieves the current user\'s unread personal messages.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'mark',
                    'type' => 'Boolean',
                    'info' => 'One of (true, false).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of the number of links to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSent',
            'description' => 'Retrieves the current user\'s sent personal messages.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'mark',
                    'type' => 'Boolean',
                    'info' => 'One of (true, false).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of the number of links to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserUpvoted',
            'description' => 'Obtain posts and comments upvoted by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserDownvoted',
            'description' => 'Obtain posts and comments downvoted by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserComments',
            'description' => 'Obtain only comments made by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserSubmitted',
            'description' => 'Obtain only posts made by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserGildingsGiven',
            'description' => 'Obtain posts and comments gilded (given) by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserGildingsReceived',
            'description' => 'Obtain posts and comments gilded (received) by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserSaved',
            'description' => 'Obtain posts and comments saved by the specified user.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserHidden',
            'description' => 'Obtain posts and comments hidden by the specified user.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records. Defaults to the current user.',
                    'required' => true,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (hot, new, top, controversial).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of (hour, day, week, month, year, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchSubredditsByName',
            'description' => 'List subreddit names that begin with a query string.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'query',
                    'type' => 'String',
                    'info' => 'Search for subreddits that start with this. Maximum 50 characters, all printable.',
                    'required' => true,
                ),
                array (
                    'name' => 'includeOver18',
                    'type' => 'Boolean',
                    'info' => 'Include subreddits that are set as NSFW (over_18).',
                    'required' => false,
                ),
                array (
                    'name' => 'exact',
                    'type' => 'Boolean',
                    'info' => 'Only return exact match.',
                    'required' => false,
                ),
                array (
                    'name' => 'includeUnadvertisable',
                    'type' => 'Boolean',
                    'info' => 'Only return subreddits that have hide_ads set to True or are on the anti_ads_subreddits list.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecommendedSubreddits',
            'description' => 'Retrieve a list of recommended subreddits based on the names of existing ones.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'srnames',
                    'type' => 'String',
                    'info' => 'Comma-delimited list of subreddits on which to base recommendations.',
                    'required' => true,
                ),
                array (
                    'name' => 'omit',
                    'type' => 'String',
                    'info' => 'Omit these specific subreddits from results (comma-delimited list of subreddit names).',
                    'required' => false,
                ),
                array (
                    'name' => 'over18',
                    'type' => 'Boolean',
                    'info' => 'Include subreddits that are set as NSFW (over_18).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteSubredditImage',
            'description' => 'Remove an image from the subreddit\'s custom image set.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to remove the image.',
                    'required' => true,
                ),
                array (
                    'name' => 'imageName',
                    'type' => 'String',
                    'info' => 'The name of the image to delete.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getWikiContributors',
            'description' => 'Retrieve a list of approved wiki contributors from the specified subreddit. Must be a mod or approved wiki contributor in subreddit. Using pagination will result in the last item of the previous page appearing as the first item of the next page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve approved wiki contributors.',
                    'required' => true,
                ),
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Jump to a specific user. Will return an empty list if user is not on list.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getContributors',
            'description' => 'Retrieve a list of approved submitters from the specified subreddit. Must be a mod or approved submitter in subreddit. Using pagination will result in the last item of the previous page appearing as the first item of the next page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve approved wiki contributors.',
                    'required' => true,
                ),
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Jump to a specific user. Will return an empty list if user is not on list.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getWikiBanned',
            'description' => 'Retrieve a list of wiki banned users from the specified subreddit. Must be a mod with access permissions. Using pagination will result in the last item of the previous page appearing as the first item of the next page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve wiki banned.',
                    'required' => true,
                ),
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Jump to a specific user. Will return an empty list if user is not on list.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getModerators',
            'description' => 'Retrieve a list of moderators from the specified subreddit. Must have read access to subreddit. This function does not use pagination, but it\'s here anyway in case that\'s changed in the future.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve moderators.',
                    'required' => true,
                ),
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Jump to a specific user. Will return an empty list if user is not on list.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMuted',
            'description' => 'Retrieve a list of muted users from the specified subreddit. Must be a mod with access permissions. Using pagination will result in the last item of the previous page appearing as the first item of the next page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve mute.',
                    'required' => true,
                ),
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Jump to a specific user. Will return an empty list if user is not on list.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getBanned',
            'description' => 'Retrieve a list of banned users from the specified subreddit. Must be a mod with access permissions. Using pagination will result in the last item of the previous page appearing as the first item of the next page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve banned.',
                    'required' => true,
                ),
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Jump to a specific user. Will return an empty list if user is not on list.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'aboutSubreddit',
            'description' => 'Retrieves information about the specified subreddit, including subreddit ID.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve information.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteSubredditIcon',
            'description' => 'Remove the subreddit\'s custom mobile icon.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to remove the icon.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteSubredditHeaderImage',
            'description' => 'Remove the subreddit\'s custom header image.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to remove the header image.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteSubredditBanner',
            'description' => 'Remove the subreddit\'s custom mobile banner.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to remove the banner.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unblockUser',
            'description' => 'Unblock a user by username.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user to unblock.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'removeFriend',
            'description' => 'Removes the specified user as a friend.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Username of user to remove.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addFriend',
            'description' => 'Adds the specified user as a friend.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of friend to add.',
                    'required' => true,
                ),
                array (
                    'name' => 'note',
                    'type' => 'String',
                    'info' => 'Note to add to friend record. Currently only available to those with reddit gold.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'search',
            'description' => 'Perform a search query. Somewhat untested due to the complexity of and possible combinations to use in the search function.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'q',
                    'type' => 'String',
                    'info' => 'Query of which to search.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit to which to restrict search.',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'Sort results by one of \'relevance\', \'hot\', \'top\', \'new\', \'comments\'. Defaults to \'relevance\'.',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of \'hour\', \'day\', \'week\', \'month\', \'year\', \'all\'. Defaults to all.',
                    'required' => false,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'Comma-delimited list of result types: \'sr\', \'link\', or null.',
                    'required' => false,
                ),
                array (
                    'name' => 'includeFacets',
                    'type' => 'Boolean',
                    'info' => 'Include facets.',
                    'required' => false,
                ),
                array (
                    'name' => 'restrictSr',
                    'type' => 'Boolean',
                    'info' => 'Restrict subreddit.',
                    'required' => false,
                ),
                array (
                    'name' => 'syntax',
                    'type' => 'String',
                    'info' => 'One of (cloudsearch, lucene, plain).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The maximum number of items desired (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'usernameAvailable',
            'description' => 'Presumably checks whether the specified username is available, but endpoint is not working at this time.',
            'args' => array (
                array (
                    'name' => 'user',
                    'type' => 'String',
                    'info' => 'Username to check for availability.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiGetDescription',
            'description' => 'Get a multi\'s description.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiEdit',
            'description' => 'Create or update a multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'displayName',
                    'type' => 'String',
                    'info' => 'A string no longer than 50 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'descriptionMd',
                    'type' => 'String',
                    'info' => 'Multireddit sidebar text (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'iconName',
                    'type' => 'String',
                    'info' => 'One of(\'art and design\', \'ask\', \'books\', \'business\', \'cars\', \'comics\', \'cute animals\', \'diy\', \'entertainment\', \'food and drink\', \'funny\', \'games\', \'grooming\', \'health\', \'life advice\', \'military\', \'models pinup\', \'music\', \'news\', \'philosophy\', \'pictures and gifs\', \'science\', \'shopping\', \'sports\', \'style\', \'tech\', \'travel\', \'unusual stories\', \'video\', \'\', \'None\').',
                    'required' => false,
                ),
                array (
                    'name' => 'keyColor',
                    'type' => 'String',
                    'info' => 'A 6 - digit rgb hex color, e.g. \'#AABBCC\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'subredditsName',
                    'type' => 'String',
                    'info' => 'Comma-separated string of subreddits name.',
                    'required' => false,
                ),
                array (
                    'name' => 'visibility',
                    'type' => 'String',
                    'info' => 'One of \'public\', \'private\', \'hidden\'. Hidden multireddits will not be visible to you except through the API.',
                    'required' => false,
                ),
                array (
                    'name' => 'weightingScheme',
                    'type' => 'String',
                    'info' => 'One of \'classic\', \'fresh\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'expandSrs',
                    'type' => 'Boolean',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiAddSubreddit',
            'description' => 'Add the specified subreddit to the specified multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'subredditName',
                    'type' => 'String',
                    'info' => 'Name of subreddit to add.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiGetSubreddit',
            'description' => 'Get information about the specified subreddit in the specified multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'subredditName',
                    'type' => 'String',
                    'info' => 'Subreddit for which to obtain information.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiRemoveSubreddit',
            'description' => 'Remove the specified subreddit from the specified multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'subredditName',
                    'type' => 'String',
                    'info' => 'Name of subreddit to remove.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiEditDescription',
            'description' => 'Edit the description/sidebar for the specified multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'modelBodyMd',
                    'type' => 'String',
                    'info' => 'New description (raw markdown text).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserOverview',
            'description' => 'Obtain posts and comments made by the specified user.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve records.',
                    'required' => true,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'Sorting method. One of \'hot\', \'new\', \'top\', \'controversial\', or null.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => 'One of (given).',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'One of \'hour\', \'day\', \'week\', \'month\', \'year\', \'all\', or null.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUser',
            'description' => 'Retrieve information about the specified user.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user to retrieve.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserTrophies',
            'description' => 'Get a user\'s trophies.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Username of user for whom to retrieve trophies.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiGet',
            'description' => 'Fetch a multi\'s data and subreddit list by name.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'expandSrs',
                    'type' => 'Boolean',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchSubreddits',
            'description' => 'Search for subreddits by title and description.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'q',
                    'type' => 'String',
                    'info' => 'Query with which to search',
                    'required' => true,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'Sorting method. One of \'relevance\', \'activity\'',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'leaveModerator',
            'description' => 'Abdicate moderator status in a subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Name of subreddit to leave.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getStickies',
            'description' => 'Retrieve a subreddit\'s stickied posts.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to retrieve sticky posts.',
                    'required' => true,
                ),
                array (
                    'name' => 'num',
                    'type' => 'String',
                    'info' => 'Argument can be used to select a specific sticky (an integer between 1 and 2 (default: 1)).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'leaveContributor',
            'description' => 'Abdicate approved submitter status in a subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Name of subreddit to leave.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiDelete',
            'description' => 'Deletes the specified multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiGetUser',
            'description' => 'Retrieves a list of multireddits owned by the specified user.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user for which to retrieve owned multireddits.',
                    'required' => true,
                ),
                array (
                    'name' => 'expandSrs',
                    'type' => 'Boolean',
                    'info' => 'Obtain extra details about the subreddits of each multireddit.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'ignoreReports',
            'description' => 'Ignores reports for the specified thing.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to be ignored.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiRename',
            'description' => 'Renames a multireddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'from',
                    'type' => 'String',
                    'info' => 'Name of multireddit to rename.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'Destination name.',
                    'required' => true,
                ),
                array (
                    'name' => 'displayName',
                    'type' => 'String',
                    'info' => 'A string no longer than 50 characters.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unmuteUserByMessage',
            'description' => 'Unmute a user from a subreddit based on the thing ID of a message they sent.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of the message author to be unmuted.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getPopularSubreddits',
            'description' => 'Retrieves a list of popular subreddits.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyModeratedSubreddits',
            'description' => 'Retrieve a list of the current user\'s subreddits in which they are a moderator.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unignoreReports',
            'description' => 'Allow future reports on a thing to cause notifications.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to be unignored.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'remove',
            'description' => 'Remove a link, comment, or modmail message.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to remove.',
                    'required' => true,
                ),
                array (
                    'name' => 'spam',
                    'type' => 'Boolean',
                    'info' => 'Mark as spam.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyContributedSubreddits',
            'description' => 'Retrieve a list of the current user\'s subreddits in which they are an approved submitter.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMySubscribedSubreddits',
            'description' => 'Retrieve a list of the current user\'s subscribed subreddits.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiCreate',
            'description' => 'Create a multi. Responds with 409 Conflict if it already exists.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multireddit',
                    'type' => 'String',
                    'info' => 'Multireddit name.',
                    'required' => true,
                ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'displayName',
                    'type' => 'String',
                    'info' => 'A string no longer than 50 characters.',
                    'required' => true,
                ),
                array (
                    'name' => 'descriptionMd',
                    'type' => 'String',
                    'info' => 'Multireddit sidebar text (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'iconName',
                    'type' => 'String',
                    'info' => 'One of(\'art and design\', \'ask\', \'books\', \'business\', \'cars\', \'comics\', \'cute animals\', \'diy\', \'entertainment\', \'food and drink\', \'funny\', \'games\', \'grooming\', \'health\', \'life advice\', \'military\', \'models pinup\', \'music\', \'news\', \'philosophy\', \'pictures and gifs\', \'science\', \'shopping\', \'sports\', \'style\', \'tech\', \'travel\', \'unusual stories\', \'video\', \'\', \'None\').',
                    'required' => false,
                ),
                array (
                    'name' => 'keyColor',
                    'type' => 'String',
                    'info' => 'A 6 - digit rgb hex color, e.g. \'#AABBCC\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'subredditsName',
                    'type' => 'String',
                    'info' => 'Comma-separated string of subreddits name.',
                    'required' => false,
                ),
                array (
                    'name' => 'visibility',
                    'type' => 'String',
                    'info' => 'One of \'public\', \'private\', \'hidden\'. Hidden multireddits will not be visible to you except through the API.',
                    'required' => false,
                ),
                array (
                    'name' => 'weightingScheme',
                    'type' => 'String',
                    'info' => 'One of \'classic\', \'fresh\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'expandSrs',
                    'type' => 'Boolean',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'muteUserByMessage',
            'description' => 'Mute a user from a subreddit based on the thing ID of a message they sent.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of the message author to be muted.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiGetMine',
            'description' => 'Retrieves a list of multireddits that are owned by the current user.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'expandSrs',
                    'type' => 'Boolean',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'multiCopy',
            'description' => 'Copy an existing multireddit to your own set.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),
                array (
                    'name' => 'multiredditOwner',
                    'type' => 'String',
                    'info' => 'Username of multireddit owner.',
                    'required' => true,
                ),
                array (
                    'name' => 'from',
                    'type' => 'String',
                    'info' => 'Name of multireddit to copy.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'Name of destination multireddit.',
                    'required' => true,
                ),
                array (
                    'name' => 'displayName',
                    'type' => 'String',
                    'info' => 'A string no longer than 50 characters.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'editSubreddit',
            'description' => 'Change a subreddit\'s configuration.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Subreddit name.',
                    'required' => false,
                ),
                array (
                    'name' => 'publicDescription',
                    'type' => 'String',
                    'info' => 'Public description (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'Raw markdown text.',
                    'required' => false,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'A string no longer than 100 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'header-title',
                    'type' => 'String',
                    'info' => 'A string no longer than 500 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'sr',
                    'type' => 'String',
                    'info' => 'Name of subreddit to change.',
                    'required' => false,
                ),
                array (
                    'name' => 'themeSr',
                    'type' => 'String',
                    'info' => 'Subreddit name.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'A valid IETF language tag (underscore separated).',
                    'required' => false,
                ),
                array (
                    'name' => 'commentScoreHideMins',
                    'type' => 'Number',
                    'info' => 'An integer between 0 and 1440 (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'excludeBannedModqueue',
                    'type' => 'Boolean',
                    'info' => 'Exclude banned modqueue, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'submitLinkLabel',
                    'type' => 'String',
                    'info' => 'A string no longer than 60 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'submitText',
                    'type' => 'String',
                    'info' => 'Raw markdown text.',
                    'required' => false,
                ),
                array (
                    'name' => 'submitTextLabel',
                    'type' => 'String',
                    'info' => 'A string no longer than 60 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'suggestedCommentSort',
                    'type' => 'String',
                    'info' => 'One of (confidence, top, new, controversial, old, random, qa, live).',
                    'required' => false,
                ),
                array (
                    'name' => 'linkType',
                    'type' => 'String',
                    'info' => 'One of (any, link, self).',
                    'required' => false,
                ),
                array (
                    'name' => 'spamComments',
                    'type' => 'String',
                    'info' => 'One of (low, high, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'spamLinks',
                    'type' => 'String',
                    'info' => 'One of (low, high, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'spamSelfposts',
                    'type' => 'String',
                    'info' => 'One of (low, high, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'spoilersEnabled',
                    'type' => 'Boolean',
                    'info' => 'Spoilers enabled, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (gold_restricted, archived, restricted, gold_only, employees_only, private, public).',
                    'required' => false,
                ),
                array (
                    'name' => 'wikiEditAge',
                    'type' => 'Number',
                    'info' => 'An integer greater than 0 (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'wikiEditKarma',
                    'type' => 'Number',
                    'info' => 'An integer greater than 0 (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'wikimode',
                    'type' => 'String',
                    'info' => 'One of (disabled, modonly, anyone).',
                    'required' => false,
                ),
                array (
                    'name' => 'allowImages',
                    'type' => 'Boolean',
                    'info' => 'Allow images, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'allowTop',
                    'type' => 'Boolean',
                    'info' => 'Allow top, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'hideAds',
                    'type' => 'Boolean',
                    'info' => 'Hide ads, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'over18',
                    'type' => 'Boolean',
                    'info' => 'Is over 18, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'publicTraffic',
                    'type' => 'Boolean',
                    'info' => 'Public traffic, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'showMedia',
                    'type' => 'Boolean',
                    'info' => 'Show media, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'showMediaPreview',
                    'type' => 'Boolean',
                    'info' => 'Show media preview, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'collapseDeletedComments',
                    'type' => 'Boolean',
                    'info' => 'Collapse deleted comments, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'themeSrUpdate',
                    'type' => 'Boolean',
                    'info' => 'Theme subreddit update, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'g-recaptcha-response',
                    'type' => 'String',
                    'info' => 'Recaptcha response.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getDefaultSubreddits',
            'description' => 'Retrieves a list of default subreddits.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getGoldOnlySubreddits',
            'description' => 'Retrieves a list of gold-only subreddits.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getNewSubreddits',
            'description' => 'Retrieves a list of new subreddits.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSubredditSidebar',
            'description' => 'Get a subreddit\'s sidebar contents.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of which to retrieve sidebar.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSubredditSettings',
            'description' => 'Retrieve a list of the subreddit\'s settings. Must be a moderator.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'The subreddit to retrieve.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getModerationLog',
            'description' => 'Retrieves recent entries from the moderation log for the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of log to retrieve. All moderated subreddits by default.',
                    'required' => false,
                ),
                array (
                    'name' => 'mod',
                    'type' => 'String',
                    'info' => 'Filter by moderator.',
                    'required' => false,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'Filter by mod action, one of (banuser, unbanuser, removelink, approvelink, removecomment, approvecomment, addmoderator, invitemoderator, uninvitemoderator, acceptmoderatorinvite, removemoderator, addcontributor, removecontributor, editsettings, editflair, distinguish, marknsfw, wikibanned, wikicontributor, wikiunbanned, wikipagelisted, removewikicontributor, wikirevise, wikipermlevel, ignorereports, unignorereports, setpermissions, setsuggestedsort, sticky, unsticky, setcontestmode, unsetcontestmode, lock, unlock, muteuser, unmuteuser, createrule, editrule, deleterule, spoiler, unspoiler, modmail_enrollment).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchSubredditsByTopic',
            'description' => 'Search for subreddits by topic keywords.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'query',
                    'type' => 'String',
                    'info' => 'Query with which to search.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'setSubredditStylesheet',
            'description' => 'Set a subreddit\'s stylesheet.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of which to set stylesheet.',
                    'required' => true,
                ),
                array (
                    'name' => 'stylesheetContents',
                    'type' => 'String',
                    'info' => 'Contents of stylesheet, probably pretty long.',
                    'required' => true,
                ),
                array (
                    'name' => 'reason',
                    'type' => 'String',
                    'info' => 'Since the stylesheet is a wiki page, optionally provide a reason for editing.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSubmitText',
            'description' => 'Retrieves the \"submitting to /r/&subreddit\" text for the selected subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Name of subreddit from which to obtain submit text.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createSubreddit',
            'description' => 'Create a new subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'sr',
                    'type' => 'String',
                    'info' => 'Name of subreddit to change.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Subreddit name.',
                    'required' => false,
                ),
                array (
                    'name' => 'publicDescription',
                    'type' => 'String',
                    'info' => 'Public description (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'Raw markdown text.',
                    'required' => false,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'A string no longer than 100 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'header-title',
                    'type' => 'String',
                    'info' => 'A string no longer than 500 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'themeSr',
                    'type' => 'String',
                    'info' => 'Subreddit name.',
                    'required' => false,
                ),
                array (
                    'name' => 'lang',
                    'type' => 'String',
                    'info' => 'A valid IETF language tag (underscore separated).',
                    'required' => false,
                ),
                array (
                    'name' => 'commentScoreHideMins',
                    'type' => 'Number',
                    'info' => 'An integer between 0 and 1440 (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'excludeBannedModqueue',
                    'type' => 'Boolean',
                    'info' => 'Exclude banned modqueue, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'submitLinkLabel',
                    'type' => 'String',
                    'info' => 'A string no longer than 60 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'submitText',
                    'type' => 'String',
                    'info' => 'Raw markdown text.',
                    'required' => false,
                ),
                array (
                    'name' => 'submitTextLabel',
                    'type' => 'String',
                    'info' => 'A string no longer than 60 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'suggestedCommentSort',
                    'type' => 'String',
                    'info' => 'One of (confidence, top, new, controversial, old, random, qa, live).',
                    'required' => false,
                ),
                array (
                    'name' => 'linkType',
                    'type' => 'String',
                    'info' => 'One of (any, link, self).',
                    'required' => false,
                ),
                array (
                    'name' => 'spamComments',
                    'type' => 'String',
                    'info' => 'One of (low, high, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'spamLinks',
                    'type' => 'String',
                    'info' => 'One of (low, high, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'spamSelfposts',
                    'type' => 'String',
                    'info' => 'One of (low, high, all).',
                    'required' => false,
                ),
                array (
                    'name' => 'spoilersEnabled',
                    'type' => 'Boolean',
                    'info' => 'Spoilers enabled, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (gold_restricted, archived, restricted, gold_only, employees_only, private, public).',
                    'required' => false,
                ),
                array (
                    'name' => 'wikiEditAge',
                    'type' => 'Number',
                    'info' => 'An integer greater than 0 (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'wikiEditKarma',
                    'type' => 'Number',
                    'info' => 'An integer greater than 0 (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'wikimode',
                    'type' => 'String',
                    'info' => 'One of (disabled, modonly, anyone).',
                    'required' => false,
                ),
                array (
                    'name' => 'allowImages',
                    'type' => 'Boolean',
                    'info' => 'Allow images, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'allowTop',
                    'type' => 'Boolean',
                    'info' => 'Allow top, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'hideAds',
                    'type' => 'Boolean',
                    'info' => 'Hide ads, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'over18',
                    'type' => 'Boolean',
                    'info' => 'Is over 18, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'publicTraffic',
                    'type' => 'Boolean',
                    'info' => 'Public traffic, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'showMedia',
                    'type' => 'Boolean',
                    'info' => 'Show media, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'showMediaPreview',
                    'type' => 'Boolean',
                    'info' => 'Show media preview, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'collapseDeletedComments',
                    'type' => 'Boolean',
                    'info' => 'Collapse deleted comments, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'themeSrUpdate',
                    'type' => 'Boolean',
                    'info' => 'Theme subreddit update, boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'g-recaptcha-response',
                    'type' => 'String',
                    'info' => 'Recaptcha response.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSubredditStylesheet',
            'description' => 'Get a subreddit\'s stylesheet.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of which to retrieve stylesheet.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'subscribe',
            'description' => 'Subscribe to a subreddit. Must have read access to the subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit to which to subscribe.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unsubscribe',
            'description' => 'Unsubscribe from a subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to unsubscribe.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'uploadSubredditImage',
            'description' => 'Upload an image to the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit to which to upload image.',
                    'required' => true,
                ),
                array (
                    'name' => 'file',
                    'type' => 'String',
                    'info' => 'Relative or absolute path of file (maximum size of 500 KiB).',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'If &upload_type is \'img\', assign the image this name. Ignored otherwise.',
                    'required' => true,
                ),
                array (
                    'name' => 'uploadType',
                    'type' => 'String',
                    'info' => 'One of \'img\', \'header\', \'icon\', \'banner\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'imageType',
                    'type' => 'String',
                    'info' => 'One of \'png\' or \'jpg\'.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'distinguish',
            'description' => 'Mod distinguish a post or comment.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to distinguish.',
                    'required' => true,
                ),
                array (
                    'name' => 'how',
                    'type' => 'Boolean',
                    'info' => 'True to set [M] distinguish. False to undistinguish.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'approve',
            'description' => 'Marks the specified thing as approved.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to be approved.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'acceptModeratorInvite',
            'description' => 'Accepts a moderator invitation for the specified subreddit. You must have a pending invitation for that subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit to accept invitation.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUnmoderated',
            'description' => 'Retrieves a list of things that have not been moderated in the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of items to retrieve. All moderated subreddits by default.',
                    'required' => true,
                ),
                array (
                    'name' => 'only',
                    'type' => 'String',
                    'info' => 'One of (links, comments).',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiAllowEditor',
            'description' => 'Allow the specified user to edit the specified wiki page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of the wiki page.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user to allow.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Name of page to allow user to edit.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiDisallowEditor',
            'description' => 'Remove the specified user from the allowed editors list of the specified wiki page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of the wiki page.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user to allow.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Name of page to disallow user to edit.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiGetPages',
            'description' => 'Retrieves a list of all pages of the specified subreddit\'s wiki.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve pages.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiGetPage',
            'description' => 'Retrieves the specified wiki page, optionally at a specific revision or a comparison between revisions.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to retrieve page.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Page to retrieve.',
                    'required' => true,
                ),
                array (
                    'name' => 'v',
                    'type' => 'String',
                    'info' => 'Specific revision ID to retrieve (optional).',
                    'required' => false,
                ),
                array (
                    'name' => 'v2',
                    'type' => 'String',
                    'info' => 'ID of revision with which to compare &v (optional2).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiGetRevisions',
            'description' => 'Retrieves a listing of wiki revisions for all pages within the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve revisions.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiGetPageRevisions',
            'description' => 'Retrieves a listing of wiki revisions for the specified page within the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit for which to retrieve revisions.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Page for which to retrieve revisions.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiEditPage',
            'description' => 'Edit a wiki page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to edit page.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Page to edit.',
                    'required' => true,
                ),
                array (
                    'name' => 'content',
                    'type' => 'String',
                    'info' => 'Content with which to overwrite page.',
                    'required' => true,
                ),
                array (
                    'name' => 'reason',
                    'type' => 'String',
                    'info' => 'Reason for revision (up to 256 characters long).',
                    'required' => false,
                ),
                array (
                    'name' => 'previous',
                    'type' => 'String',
                    'info' => 'Revision ID on which to base this edit.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiToggleHideRevision',
            'description' => 'Toggle a revision\'s status of hidden.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of revision.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Pagename of revision.',
                    'required' => true,
                ),
                array (
                    'name' => 'revision',
                    'type' => 'String',
                    'info' => 'ID of revision to toggle hidden status.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiRevertToRevision',
            'description' => 'Revert a wiki page to a previous revision.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of revision.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Pagename of revision.',
                    'required' => true,
                ),
                array (
                    'name' => 'revision',
                    'type' => 'String',
                    'info' => 'ID of revision to which to revert.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiGetPageDiscussions',
            'description' => 'Retrieves a listing of discussions about a certain wiki page.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of page.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Page for which to retrieve discussions.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits (optional).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiGetPageSettings',
            'description' => 'Get the specified page\'s settings in the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of page.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Name of page.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'wikiUpdatePageSettings',
            'description' => 'Update the specified page\'s settings in the specified subreddit.',
            'args' => array (
                 array (
                     'name' => 'appClientId',
                     'type' => 'credentials',
                     'info' => 'Id of your app.',
                     'required' => true,
                 ),
                 array (
                     'name' => 'accessToken',
                     'type' => 'String',
                     'info' => 'Access token.',
                     'required' => true,
                 ),

                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of page.',
                    'required' => true,
                ),
                array (
                    'name' => 'page',
                    'type' => 'String',
                    'info' => 'Name of page.',
                    'required' => true,
                ),
                array (
                    'name' => 'permlevel',
                    'type' => 'Number',
                    'info' => 'Permissions level for page. 0 for use subreddit wiki permissions, 1 for only approved editors, 2 for only mods, null to not update.',
                    'required' => false,
                ),
                array (
                    'name' => 'listed',
                    'type' => 'Boolean',
                    'info' => 'Show this page on the list of wiki pages. True to show, false to hide, null to not update.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
        'getAccessToken'=> array (
            'dictionary'=> array (
                'appClientId' => 'appClientId',
                'appClientSecret' => 'appClientSecret',
                'code' => 'code',
                'redirectUri' => 'redirect_uri'
            ),
            'vendorUrl' => 'https://www.reddit.com/api/v1/access_token',
            'method' => 'POST-Access',
            'showApiType' => false,
            'custom' => true,
        ),
        'refreshAccessToken'=> array (
            'dictionary'=> array (
                'appClientId' => 'appClientId',
                'appClientSecret' => 'appClientSecret',
                'refreshToken' => 'refresh_token',
            ),
            'vendorUrl' => 'https://www.reddit.com/api/v1/access_token',
            'method' => 'POST-Access',
            'showApiType' => false,
            'custom' => true,
        ),
        'revokeAccessToken'=> array (
            'dictionary'=> array (
                'appClientId' => 'appClientId',
                'appClientSecret' => 'appClientSecret',
                'token' => 'token',
                'tokenTypeHint' => 'token_type_hint'
            ),
            'vendorUrl' => 'https://www.reddit.com/api/v1/revoke_token',
            'method' => 'POST-Access',
            'showApiType' => false,
            'custom' => true,
        ),

        'getMe'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyBlockedUsers'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/prefs/blocked',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyFriends'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/friends',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyKarmaBreakdown'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/karma',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyPrefs'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/prefs',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyTrophies'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/trophies',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'clearFlairTemplates'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairType' => 'flair_type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/clearflairtemplates',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteUserFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/deleteflair',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteFlairTemplate'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairTemplateId' => 'flair_template_id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/deleteflairtemplate',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'assignUserFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
                'text' => 'text',
                'link' => 'link',
                'cssClass' => 'css_class',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flair',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'configureSubredditFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairEnabled' => 'flair_enabled',
                'flairPosition' => 'flair_position',
                'flairSelfAssignEnabled' => 'flair_self_assign_enabled',
                'linkFlairPosition' => 'link_flair_position',
                'linkFlairSelfAssignEnabled' => 'link_flair_self_assign_enabled',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairconfig',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getUserFlairList'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
                'limit' => 'limit',
                'after' => 'after',
                'before' => 'before',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairlist',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserFlairSelector'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'link' => 'link',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairselector',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'addFlairTemplate'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'apiType' => 'api_type',
                'text' => 'text',
                'flairTemplateId' => 'flair_template_id',
                'cssClass' => 'css_class',
                'textEditable' => 'text_editable',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairtemplate',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'selectUserFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
                'flairTemplateId' => 'flair_template_id',
                'text' => 'text',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/selectflair',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'showMyFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairEnabled' => 'flair_enabled',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/setflairenabled',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'gild'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'fullname' => 'fullname',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/gold/gild/{{fullname}}',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'giveGold'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'months' => 'months',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/gold/give/{{username}}',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'createComment'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thingId' => 'thing_id',
                'text' => 'text',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/comment',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'delete'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/del',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'editText'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thingId' => 'thing_id',
                'text' => 'text',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/editusertext',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'hidePost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/hide',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getInfo'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'url' => 'url',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/info',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'lockThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/lock',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markNSFW'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/marknsfw',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getCommentChildren'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'linkId' => 'link_id',
                'children' => 'children',
                'sort' => 'sort',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/morechildren',
            'method' => 'GET',
            'showApiType' => true,
        ),
        'report'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thingId' => 'thing_id',
                'reason' => 'reason',
                'otherReason' => 'other_reason',
                'siteReason' => 'site_reason',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/report',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'save'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'category' => 'category',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/save',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getSavedCategories'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/saved_categories',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'sendInboxReplies'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'state' => 'state',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/sendreplies',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'setContestMode'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'state' => 'state',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/set_contest_mode',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'stickyPost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'num' => 'num',
                'state' => 'state',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/set_subreddit_sticky',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'setSuggestedSort'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thing' => 'thing',
                'sort' => 'sort',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/set_suggested_sort',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'createPost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'sr' => 'sr',
                'title' => 'title',
                'text' => 'text',
                'url' => 'url',
                'sendreplies' => 'sendreplies',
                'kind' => 'kind',
                'resubmit' => 'resubmit',
                'extension' => 'extension',
                'g-recaptcha-response' => 'g-recaptcha-response',
                'app' => 'app',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/submit',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'unhidePost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unhide',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unlockThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unlock',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unmarkNSFW'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unmarknsfw',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unsave'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unsave',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'upVote'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'rank' => 'rank',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/vote',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'downVote'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'rank' => 'rank',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/vote',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'unVote'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'rank' => 'rank',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/vote',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'getLinksById'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'names' => 'names',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/by_id/{{names}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getComments'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'article' => 'article',
                'comment' => 'comment',
                'context' => 'context',
                'depth' => 'depth',
                'limit' => 'limit',
                'sort' => 'sort',
                'showedits' => 'showedits',
                'showmore' => 'showmore',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/comments/{{article}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getDuplicateLinks'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'article' => 'article',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/duplicates/{{article}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getHot'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/hot.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getControversial'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/controversial.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getNew'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/new.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getRandom'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/random.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getTop'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/top.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getRising'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/rising.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'checkNeedsCaptcha'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/needs_captcha',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getLiveThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'names' => 'names',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/by_id/{{names}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'createLiveThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'title' => 'title',
                'description' => 'description',
                'resources' => 'resources',
                'nsfw' => 'nsfw',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/create',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getCurrentlyFeaturedLiveThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/happening_now',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'acceptInvitationToThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/accept_contributor_invite',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'closeThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/close_thread',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteUpdateFromThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/delete_update',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'editThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'title' => 'title',
                'description' => 'description',
                'resources' => 'resources',
                'nsfw' => 'nsfw',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/edit',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'inviteContributerToThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'name' => 'name',
                'permissions' => 'permissions',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/invite_contributor',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'leaveContributerFromThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/leave_contributor',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'reportThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/report',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'revokeUserContributorship'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/rm_contributor',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'revokeContributorInvite'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/rm_contributor_invite',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'changeContributorPermissions'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'name' => 'name',
                'permissions' => 'permissions',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/set_contributor_permissions',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'postUpdateToThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'body' => 'body',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/update',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getThreadUpdates'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'stylesr' => 'stylesr',
                'isEmbed' => 'is_embed',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/live/{{thread}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getThreadContributers'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/live/{{thread}}/contributors',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getThreadSubmissions'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/live/{{thread}}/discussions',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'collapseMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/collapse_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'composeMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'to' => 'to',
                'subject' => 'subject',
                'text' => 'text',
                'fromSr' => 'from_sr',
                'g-recaptcha-response' => 'g-recaptcha-response',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/compose',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/del_msg',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markAllMessagesAsRead'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/read_all_messages',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markMessageRead'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/read_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unblockSubredditByMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unblock_subreddit',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'uncollapseMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/uncollapse_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markMessageUnread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unread_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getInbox'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'mark' => 'mark',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/message/inbox.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUnread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'mark' => 'mark',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/message/unread.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getSent'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'mark' => 'mark',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/message/sent.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserUpvoted' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/upvoted.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserDownvoted' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/downvoted.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserComments' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/comments.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserSubmitted' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/submitted.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserGildingsGiven' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/gilded.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserGildingsReceived' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/gilded.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserSaved' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/saved.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserHidden' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'show' => 'show',
                'sort' => 'sort',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/hidden.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'searchSubredditsByName' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'query' => 'query',
                'includeOver18' => 'include_over_18',
                'exact' => 'exact',
                'includeUnadvertisable' => 'include_unadvertisable',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/search_reddit_names',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getRecommendedSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'srnames' => 'srnames',
                'omit' => 'omit',
                'over18' => 'over_18',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/recommend/sr/{{srnames}}.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'deleteSubredditImage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'imageName' => 'image_name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/delete_sr_img',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getWikiContributors' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'user' => 'user',
                'show' => 'show',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/wikicontributors.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getContributors' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'user' => 'user',
                'show' => 'show',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/contributors.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getWikiBanned' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'user' => 'user',
                'show' => 'show',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/wikibanned.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getModerators' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'user' => 'user',
                'show' => 'show',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/moderators.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMuted' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'user' => 'user',
                'show' => 'show',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/muted.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getBanned' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'user' => 'user',
                'show' => 'show',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/banned.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'aboutSubreddit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'deleteSubredditIcon' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/delete_sr_icon',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteSubredditHeaderImage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/delete_sr_header',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteSubredditBanner' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/delete_sr_banner',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'unblockUser' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unfriend',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'removeFriend' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/friends/{{id}}',
            'method' => 'DELETE',
            'showApiType' => false,
        ),
        'addFriend' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'name' => 'name',
                'note' => 'note',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/friends/{{name}}',
            'method' => 'PUT',
            'showApiType' => false,
            'custom' => true,
        ),
        'search' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'q' => 'q',
                'subreddit' => 'subreddit',
                'sort' => 'sort',
                't' => 't',
                'type' => 'type',
                'includeFacets' => 'include_facets',
                'restrictSr' => 'restrict_sr',
                'syntax' => 'syntax',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/search',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'usernameAvailable' => array (
            'dictionary'=> array (
                'user' => 'user',
            ),
            'vendorUrl' => 'https://www.reddit.com/api/username_available.json',
            'method' => 'GET-NoAccess',
            'showApiType' => false,
        ),
        'multiGetDescription' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}/description',
            'method' => 'GET',
            'showApiType' => false,
            'custom' => true,
        ),
        'multiEdit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'displayName' => 'display_name',
                'descriptionMd' => 'description_md',
                'iconName' => 'icon_name',
                'keyColor' => 'key_color',
                'subredditsName' => 'subreddits',
                'visibility' => 'visibility',
                'weightingScheme' => 'weighting_scheme',
                'expandSrs' => 'expand_srs',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}',
            'method' => 'PUT',
            'showApiType' => false,
            'custom' => true,
        ),
        'multiAddSubreddit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'subredditName' => 'srname',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}/r/{{subredditName}}',
            'method' => 'PUT',
            'showApiType' => false,
            'custom' => true,
        ),
        'multiGetSubreddit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'subredditName' => 'srname',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}/r/{{subredditName}}',
            'method' => 'GET',
            'showApiType' => false,
            'custom' => true
        ),
        'multiRemoveSubreddit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'subredditName' => 'srname',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/user/{{multiredditOwner}}/m/{{multireddit}}/r/{{subredditName}}',
            'method' => 'DELETE',
            'showApiType' => false,
            'custom' => true,
        ),
        'multiEditDescription' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'modelBodyMd' => 'model_body_md',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}/description',
            'method' => 'PUT',
            'showApiType' => false,
            'custom' => true,
        ),
        'getUserOverview' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'sort' => 'sort',
                'show' => 'show',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/overview.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUser' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/user/{{username}}/about.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserTrophies' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/user/{{id}}/trophies',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'multiGet' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'expandSrs' => 'expand_srs',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}',
            'method' => 'GET',
            'showApiType' => false,
            'custom' => true,
        ),
        'searchSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'q' => 'q',
                'sort' => 'sort',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/search',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'leaveModerator' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/leavemoderator',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getStickies' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'num' => 'num',
            ),
            'vendorUrl' => 'https://www.reddit.com[[/r/{{subreddit}}]]/sticky.json',
            'method' => 'GET-NoAccess',
            'showApiType' => false,
        ),
        'leaveContributor' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/leavecontributor',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'multiDelete' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}',
            'method' => 'DELETE',
            'showApiType' => false,
            'custom' => true,
        ),
        'multiGetUser' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'expandSrs' => 'expand_srs',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/user/{{username}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'ignoreReports' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/ignore_reports',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'multiRename' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'displayName' => 'display_name',
                'multiredditOwner' => 'multiredditOwner',
                'from' => 'from',
                'to' => 'to',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/rename',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'unmuteUserByMessage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unmute_message_author',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getPopularSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/popular',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyModeratedSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/mine/moderator',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'unignoreReports' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unignore_reports',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'remove' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'spam' => 'spam',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/remove',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getMyContributedSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/mine/contributor',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMySubscribedSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/mine/subscriber',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'multiCreate' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multireddit' => 'multipath',
                'multiredditOwner' => 'multiredditOwner',
                'displayName' => 'display_name',
                'descriptionMd' => 'description_md',
                'iconName' => 'icon_name',
                'keyColor' => 'key_color',
                'subredditsName' => 'subreddits',
                'visibility' => 'visibility',
                'weightingScheme' => 'weighting_scheme',
                'expandSrs' => 'expand_srs',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/{{multireddit}}',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'muteUserByMessage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/mute_message_author',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'multiGetMine' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'expandSrs' => 'expand_srs',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/mine',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'multiCopy' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'multiredditOwner' => 'multiredditOwner',
                'displayName' => 'display_name',
                'from' => 'from',
                'to' => 'to',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/multi/copy',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'editSubreddit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'name' => 'name',
                'publicDescription' => 'public_description',
                'description' => 'description',
                'title' => 'title',
                'header-title' => 'header-title',
                'sr' => 'sr',
                'themeSr' => 'theme_sr',
                'lang' => 'lang',
                'commentScoreHideMins' => 'comment_score_hide_mins',
                'excludeBannedModqueue' => 'exclude_banned_modqueue',
                'submitLinkLabel' => 'submit_link_label',
                'submitText' => 'submit_text',
                'submitTextLabel' => 'submit_text_label',
                'suggestedCommentSort' => 'suggested_comment_sort',
                'linkType' => 'link_type',
                'spamComments' => 'spam_comments',
                'spamLinks' => 'spam_links',
                'spamSelfposts' => 'spam_selfposts',
                'spoilersEnabled' => 'spoilers_enabled',
                'type' => 'type',
                'wikiEditAge' => 'wiki_edit_age',
                'wikiEditKarma' => 'wiki_edit_karma',
                'wikimode' => 'wikimode',
                'allowImages' => 'allow_images',
                'allowTop' => 'allow_top',
                'hideAds' => 'hide_ads',
                'over18' => 'over_18',
                'publicTraffic' => 'public_traffic',
                'showMedia' => 'show_media',
                'showMediaPreview' => 'show_media_preview',
                'collapseDeletedComments' => 'collapse_deleted_comments',
                'themeSrUpdate' => 'theme_sr_update',
                'g-recaptcha-response' => 'g-recaptcha-response',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/site_admin',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getDefaultSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/default',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getGoldOnlySubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/gold',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getNewSubreddits' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/subreddits/new',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getSubredditSidebar' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/config/sidebar.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getSubredditSettings' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/edit.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getModerationLog' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'mod' => 'mod',
                'type' => 'type',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/log.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'searchSubredditsByTopic' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'query' => 'query',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/subreddits_by_topic',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'setSubredditStylesheet' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'stylesheetContents' => 'stylesheet_contents',
                'reason' => 'reason',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/subreddit_stylesheet',
            'method' => 'POST',
            'showApiType' => true,
            'custom' => true,
        ),
        'getSubmitText' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/submit_text',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'createSubreddit' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'sr' => 'sr',
                'name' => 'name',
                'publicDescription' => 'public_description',
                'description' => 'description',
                'title' => 'title',
                'header-title' => 'header-title',
                'themeSr' => 'theme_sr',
                'lang' => 'lang',
                'commentScoreHideMins' => 'comment_score_hide_mins',
                'excludeBannedModqueue' => 'exclude_banned_modqueue',
                'submitLinkLabel' => 'submit_link_label',
                'submitText' => 'submit_text',
                'submitTextLabel' => 'submit_text_label',
                'suggestedCommentSort' => 'suggested_comment_sort',
                'linkType' => 'link_type',
                'spamComments' => 'spam_comments',
                'spamLinks' => 'spam_links',
                'spamSelfposts' => 'spam_selfposts',
                'spoilersEnabled' => 'spoilers_enabled',
                'type' => 'type',
                'wikiEditAge' => 'wiki_edit_age',
                'wikiEditKarma' => 'wiki_edit_karma',
                'wikimode' => 'wikimode',
                'allowImages' => 'allow_images',
                'allowTop' => 'allow_top',
                'hideAds' => 'hide_ads',
                'over18' => 'over_18',
                'publicTraffic' => 'public_traffic',
                'showMedia' => 'show_media',
                'showMediaPreview' => 'show_media_preview',
                'collapseDeletedComments' => 'collapse_deleted_comments',
                'themeSrUpdate' => 'theme_sr_update',
                'g-recaptcha-response' => 'g-recaptcha-response',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/site_admin',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getSubredditStylesheet' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/config/stylesheet.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'subscribe' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'sr_name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/subscribe',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'unsubscribe' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'sr_name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/subscribe',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'uploadSubredditImage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'file' => 'file',
                'name' => 'name',
                'uploadType' => 'upload_type',
                'imageType' => 'image_type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/upload_sr_img',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'distinguish' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'how' => 'how',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/distinguish',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'approve' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/approve',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'acceptModeratorInvite' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/accept_moderator_invite',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getUnmoderated' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'only' => 'only',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/about/unmoderated.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiAllowEditor' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'username' => 'username',
                'page' => 'page',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/wiki/alloweditor/add',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'wikiDisallowEditor' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'username' => 'username',
                'page' => 'page',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/wiki/alloweditor/del',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'wikiGetPages' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/pages',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiGetPage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'v' => 'v',
                'v2' => 'v2',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/{{page}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiGetRevisions' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/revisions',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiGetPageRevisions' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/revisions/{{page}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiEditPage' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'content' => 'content',
                'reason' => 'reason',
                'previous' => 'previous',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/wiki/edit',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'wikiToggleHideRevision' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'revision' => 'revision',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/wiki/hide',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'wikiRevertToRevision' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'revision' => 'revision',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/wiki/revert',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'wikiGetPageDiscussions' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/discussions/{{page}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiGetPageSettings' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/settings/{{page}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'wikiUpdatePageSettings' => array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'page' => 'page',
                'permlevel' => 'permlevel',
                'listed' => 'listed',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/wiki/settings/{{page}}',
            'method' => 'POST',
            'showApiType' => false,
        ),
    ),
);