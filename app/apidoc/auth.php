<?php
/**
*Login
* @SWG\Post(
*     path="/api/v1/int/login",
*     description="login",
*     produces={"application/json"},
*     tags={"auth Section"},
*     @SWG\Parameter(
*         name="data",
*         in="body",
*         type="string",
*         description="",
*         required=true,
*     @SWG\Schema(
*            type="object",
*            @SWG\Property(property="email", type="string",example="super@admin.com"),
*            @SWG\Property(property="password", type="string",example="admin1234!")
*     	)
*     ),
*     @SWG\Response(
*         response=200,
*         description="Data area."
*     ),
*     @SWG\Response(
*         response=404,
*         description="Unauthorized action.",
*     ),
*     @SWG\Response(
*         response=401,
*         description="Token Exipred",
*     )
* )
*/

/**
*Login
* @SWG\Get(
*     path="/api/v1/int/user",
*     description="get data user by token",
*     produces={"application/json"},
*     tags={"auth Section"},
*     @SWG\Parameter(
*         name="Authorization",
*         in="header",
*         type="string",
*         description="",
*         required=true,
*     ),
*     @SWG\Response(
*         response=200,
*         description="Data area."
*     ),
*     @SWG\Response(
*         response=404,
*         description="Unauthorized action.",
*     ),
*     @SWG\Response(
*         response=401,
*         description="Token Exipred",
*     )
* )
*/

/**
*Logout
* @SWG\Post(
*     path="/api/v1/int/logout",
*     description="logout",
*     produces={"application/json"},
*     tags={"auth Section"},
*     @SWG\Parameter(
*         name="Authorization",
*         in="header",
*         type="string",
*         description="",
*         required=true,
*     ),
*     @SWG\Response(
*         response=200,
*         description="Data area."
*     ),
*     @SWG\Response(
*         response=404,
*         description="Unauthorized action.",
*     ),
*     @SWG\Response(
*         response=401,
*         description="Token Exipred",
*     )
* )
*/