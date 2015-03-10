<?php
/**
 * All these functions are designed to work in PHP >= 5.2 primarily to ensure
 * that they can be used in WordPress
 */


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
 * @param array $array The array to pull values from
 * @param string $column_key The value to pull from the array
 * @param string $index_key Optional argument for specifiying the index key
 * @return array A new array of values plucked from the original
 */
if ( ! function_exists( "array_column" ) )
{
    function array_column( array $array, $columnKey, $indexKey = null)
    {
        $newArray = array();
        foreach ( $array as $item )
        {
            // If an indexKey is specified && it isset && the columnKey isset
            if ( ! is_null( $indexKey ) && isset( $item[ $indexKey ] ) && isset( $item[ $columnKey ] ) )
            {
                $newArray[ $item[ $indexKey ] ] = $item[ $columnKey ];
            }

            // Else if just the columnKey isset
            elseif ( isset( $item[ $columnKey ] ) )
            {
                $newArray[] = $item[ $columnKey ];
            }
        }
        return $newArray;
    }
}
