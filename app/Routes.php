<?php
Router::register('GET', ['url'         => '/'                       ,
                         'controller'  => 'MainController'          ,
                         'action'      => 'home']);

////////////////////////////////////////////////////
//        _   _ _ _           _                   //
//  _   _| |_(_) (_)___  __ _| |_ ___ _   _ _ __  //
// | | | | __| | | / __|/ _` | __/ _ \ | | | '__| //
// | |_| | |_| | | \__ \ (_| | ||  __/ |_| | |    //
//  \__,_|\__|_|_|_|___/\__,_|\__\___|\__,_|_|    //
////////////////////////////////////////////////////

Router::register('POST', ['url'        => '/register'               ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'store']);
Router::register('GET', ['url'         => '/register'               ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'register']);
Router::register('GET', ['url'         => '/login'                  ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'login']);
Router::register('POST', ['url'        => '/login'                  ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'checkLogin']);
Router::register('GET', ['url'         => '/logout'                 ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'logout']);
Router::register('GET', ['url'         => '/validate'               ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'showvalid']);
Router::register('GET', ['url'         => '/validate/{user}/{code}' ,
                         'controller'  => 'UserController'          ,
                         'action'      => 'validUser']);

///////////////////////////////////
//                   __ _ _      //
//  _ __  _ __ ___  / _(_) |___  //
// | '_ \| '__/ _ \| |_| | / __| //
// | |_) | | | (_) |  _| | \__ \ //
// | .__/|_|  \___/|_| |_|_|___/ //
// |_|                           //
///////////////////////////////////

Router::register('GET', ['url'         => '/profile/{user}'         ,
                         'controller'  => 'ProfileController'       ,
                         'action'      => 'profile']);
Router::register('GET', ['url'         => '/profile/{user}/edit'    ,
                         'controller'  => 'ProfileController'       ,
                         'action'      => 'showEdit']);
Router::register('POST', ['url'        => '/profile/{id}/edit'      ,
                          'controller' => 'ProfileController'       ,
                          'action'     => 'saveEdit']);
Router::register('GET', ['url'         => '/profile/{user}/ppic'    ,
                         'controller'  => 'ProfileController'       ,
                         'action'      => 'getPpicture']);
Router::register('GET', ['url'         => '/profile/{user}/bpic'    ,
                         'controller'  => 'ProfileController'       ,
                         'action'      => 'getBpicture']);
Router::register('GET', ['url'         => '/profile/{user}/style'   ,
                         'controller'  => 'ProfileController'       ,
                         'action'      => 'generateStyle']);
Router::register('GET', ['url'         => '/self/ppic'              ,
                         'controller'  => 'ProfileController'       ,
                         'action'      => 'getSelfPpicture']);

/////////////////////////////////////////////////////
//  _ __ ___   ___  ___ ___  __ _  __ _  ___  ___  //
// | '_ ` _ \ / _ \/ __/ __|/ _` |/ _` |/ _ \/ __| //
// | | | | | |  __/\__ \__ \ (_| | (_| |  __/\__ \ //
// |_| |_| |_|\___||___/___/\__,_|\__, |\___||___/ //
//                                |___/            //
/////////////////////////////////////////////////////

Router::register('GET', ['url'         => '/message'                ,
                         'controller'  => 'MessageController'       ,
                         'action'      => 'home']);
Router::register('GET', ['url'         => '/message/{user}'         ,
                         'controller'  => 'MessageController'       ,
                         'action'      => 'showMessagesof']);
Router::register('POST', ['url'        => '/message/{user}'         ,
                         'controller'  => 'MessageController'       ,
                         'action'      => 'sendMessage']);

////////////////////////////////////
//                       _        //
//   _____   _____ _ __ | |_ ___  //
//  / _ \ \ / / _ \ '_ \| __/ __| //
// |  __/\ V /  __/ | | | |_\__ \ //
//  \___| \_/ \___|_| |_|\__|___/ //
////////////////////////////////////

Router::register('GET', ['url'         => '/event/new'              ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'showCreate']);
Router::register('POST', ['url'        => '/event/new'              ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'createEvent']);

Router::register('GET', ['url'         => '/event/{id}'             ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'showEvent']);
Router::register('GET', ['url'         => '/event/{id}/edit'        ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'showEdit']);
Router::register('POST', ['url'        => '/event/{id}/edit'        ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'saveEdit']);

Router::register('GET', ['url'         => '/event/{id}/subscribe'   ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'subscribe']);
Router::register('GET', ['url'         => '/event/{id}/unsubscribe' ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'unsubscribe']);
Router::register('GET', ['url'         => '/event/{id}/delete' ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'delete']);

Router::register('GET', ['url'         => '/event/{id}/ppic'        ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'getPpicture']);
Router::register('GET', ['url'         => '/event/{id}/bpic'        ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'getBpicture']);
Router::register('GET', ['url'         => '/event/{id}/style'       ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'generateStyle']);

////////////////////////////////////////
//  _       _                _        //
// (_)_ __ | |_ ___ _ __ ___| |_ ___  //
// | | '_ \| __/ _ \ '__/ _ \ __/ __| //
// | | | | | ||  __/ | |  __/ |_\__ \ //
// |_|_| |_|\__\___|_|  \___|\__|___/ //
////////////////////////////////////////

Router::register('GET', ['url'         => '/interest/new'           ,
                         'controller'  => 'InterestController'      ,
                         'action'      => 'showNew']);

Router::register('POST', ['url'        => '/interest/add'           ,
                         'controller'  => 'InterestController'      ,
                         'action'      => 'createInterest']);

Router::register('GET', ['url'         => '/interest/{user}.json'   ,
                         'controller'  => 'InterestController'      ,
                         'action'      => 'getInterestForUser']);

Router::register('GET', ['url'         => '/interest.json'          ,
                         'controller'  => 'InterestController'      ,
                         'action'      => 'getInterest']);

/////////////////////////////////////
//            _           _        //
//   __ _  __| |_ __ ___ (_)_ __   //
//  / _` |/ _` | '_ ` _ \| | '_ \  //
// | (_| | (_| | | | | | | | | | | //
//  \__,_|\__,_|_| |_| |_|_|_| |_| //
/////////////////////////////////////

Router::register('GET', ['url'         => '/admin'                  ,
                         'controller'  => 'EventController'         ,
                         'action'      => 'createEvent']);


/////////////////////////////////////
//                          _      //
//  ___  ___  __ _ _ __ ___| |__   //
// / __|/ _ \/ _` | '__/ __| '_ \  //
// \__ \  __/ (_| | | | (__| | | | //
// |___/\___|\__,_|_|  \___|_| |_| //
/////////////////////////////////////
                               

Router::register('GET', ['url'         => '/search'                 ,
                         'controller'  => 'SearchController'        ,
                         'action'      => 'showSearch']);
Router::register('POST', ['url'        => '/search'                 ,
                         'controller'  => 'SearchController'        ,
                         'action'      => 'search']);

///////////////////////////////////////
//   __      _                _      //
//  / _|_ __(_) ___ _ __   __| |___  //
// | |_| '__| |/ _ \ '_ \ / _` / __| //
// |  _| |  | |  __/ | | | (_| \__ \ //
// |_| |_|  |_|\___|_| |_|\__,_|___/ //
///////////////////////////////////////
                                 
Router::register('GET', ['url'         => '/addfriend/{name}'       ,
                         'controller'  => 'FriendController'        ,
                         'action'      => 'addFriend']);

Router::register('GET', ['url'         => '/deletefriend/{name}'    ,
                         'controller'  => 'FriendController'        ,
                         'action'      => 'removeFriend']);

Router::register('GET', ['url'         => '/home'                   ,
                         'controller'  => 'NewsController'          ,
                         'action'      => 'show']);

Router::register('POST', ['url'         => '/home'                   ,
                         'controller'  => 'NewsController'          ,
                         'action'      => 'publish']);


?>
