<?php
 /**
* @SWG\Swagger(
*     basePath="",
*     host=L5_SWAGGER_CONST_HOST,
*     schemes={L5_schemes},
*     @SWG\Info(
*         version="1.0",
*         title="API Tukanggaji",
*         @SWG\Contact(name="", url="https://tukanggaji.com/"),
*     ),
*     @SWG\Definition(
*         definition="Error",
*         required={"code", "message"},
*         @SWG\Property(
*             property="code",
*             type="integer",
*             format="int32"
*         ),
*         @SWG\Property(
*             property="message",
*             type="string"
*         )
*     )
* )
*/