<?php
/**
 * All these functions are designed to work in PHP >= 5.2 primarily to ensure
 * that they can be used in WordPress
 */

// Array Heleprs

/**
 * array_column was added in PHP >= 5.5.
 * It's really useful and is nice if it's availible in lower versions.
 *
 * @example
 * $people = array(
 * 	array( 'id' => 2, 'name' => 'Tom' ),
 * 	array( 'id' => 3, 'name' => 'Dick' ),
 * 	array( 'id' => 5, 'name' => 'Harry' ),
 * );
 *
 * $ids = array_column( $people, 'id' );
 *
 * // Returns
 * array( 2, 3, 5 );
 *
 * @param  array  $collection The array to pull values from
 * @param  string $columnKey  The value to pull from each array
 * @param  string $indexKey   Optional argument for specifiying the index key
 * @return array  A new array of values plucked from the original
 */
if ( ! function_exists( "array_column" ) )
{
    function array_column( array $collection, $columnKey, $indexKey = null)
    {
        $newCollection = array();
        foreach ( $collection as $item )
        {
            // If an indexKey is specified && it isset && the columnKey isset
            if ( ! is_null( $indexKey ) && isset( $item[ $indexKey ] ) && isset( $item[ $columnKey ] ) )
            {
                $newCollection[ $item[ $indexKey ] ] = $item[ $columnKey ];
            }

            // Else if just the columnKey isset
            elseif ( isset( $item[ $columnKey ] ) )
            {
                $newCollection[] = $item[ $columnKey ];
            }
        }
        return $newCollection;
    }
}


// Object helpers

/**
 * object_column doesn't exist but would be useful. Vry similair to array_column,
 * given an array of objects it will pull a value from each of them and return
 * an array with the new values.
 *
 * @example
 * $people = array(
 * 	array( 'id' => 2, 'name' => 'Tom' ),
 * 	array( 'id' => 3, 'name' => 'Dick' ),
 * 	array( 'id' => 5, 'name' => 'Harry' ),
 * );
 *
 * $ids = object_column( $people, 'id' );
 *
 * // Returns
 * array( 2, 3, 5 );
 *
 * @param  array  $collection The array of objects to pull values from
 * @param  string $columnKey  The value to pull from each object
 * @param  string $indexKey   Optional argument for specifiying the index key
 * @return array  A new array of values plucked from the original
 */
if ( ! function_exists( "object_column" ) )
{
    function object_column( array $collection, $columnKey, $indexKey = null)
    {
        $newCollection = array();
        foreach ( $collection as $item )
        {
            // If an indexKey is specified && it isset && the columnKey isset
            if ( ! is_null( $indexKey ) && isset( $item->$indexKey ) && isset( $item->$columnKey ) )
            {
                $newCollection[ $item->$indexKey ] = $item->$columnKey;
            }

            // Else if just the columnKey isset
            elseif ( isset( $item->$columnKey ) )
            {
                $newCollection[] = $item->$columnKey;
            }
        }
        return $newCollection;
    }
}

function head()
{

}

function last()
{

}

// String helpers

function snake_case()
{

}

function camel_case()
{

}

function studly_case()
{

}

function starts_with()
{

}

function ends_with()
{

}

function str_contains()
{

}

function str_is()
{

}

function str_quick_random()
{

}

function str_secure_random()
{

}

// Miscellaneous heleprs

/**
 * Dump & die. Really usefull for debugging. Does exactly what it says, prints
 * to screen then dies.
 *
 * @param  mixed $anything Anything you wish to view on screen
 * @return void
 */
if ( ! function_exists("dd") )
{
    function dd($anything)
    {
        var_dump($anything);
        die;
    }
}
