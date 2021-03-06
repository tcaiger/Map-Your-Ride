<?php

# Define the common folders we will be using as constants
define('API', '../../api/');
define('LIBRARIES', API.'libraries/');
define('MODELS', API.'models/');
define('CONTROLLERS', API.'controllers/');


# Load all our libraries
require_once LIBRARIES.'auth.lib.php';
require_once LIBRARIES.'collection.lib.php';
require_once LIBRARIES.'config.lib.php';
require_once LIBRARIES.'database.lib.php';
require_once LIBRARIES.'email.lib.php';
require_once LIBRARIES.'input.lib.php';
require_once LIBRARIES.'model.lib.php';
require_once LIBRARIES.'route.lib.php';
require_once LIBRARIES.'sticky.lib.php';
require_once LIBRARIES.'url.lib.php';
require_once LIBRARIES.'xss.lib.php';

# Load all our models
require_once MODELS.'user.model.php';
require_once MODELS.'user.collection.php';
require_once MODELS.'trip.model.php';
require_once MODELS.'trip.collection.php';
require_once MODELS.'coord.model.php';
require_once MODELS.'coord.collection.php';

# Load all our controllers
require_once CONTROLLERS.'userController.php';
require_once CONTROLLERS.'tripController.php';
require_once CONTROLLERS.'coordController.php';

# load the helpers and the routes
require_once API.'helpers.php';
require_once API.'routes.php';