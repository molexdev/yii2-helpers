<?php

/**
 * @link http://www.molexdev.com/
 * @copyright Copyright (c) 2008 MPu Technology
 * @license http://www.molexdev.com/license/
 */

namespace molex\helpers;

use Yii;

/**
 * Flash helper is helper that wrap flash management from Session Object (Yii::$app->session)
 *
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0
 */
class Flash
{

    /**
     * Returns a flash message.
     * 
     * Shortcut of 
     * 
     * ```php
     *    Yii::$app->session->getFlash($key, $defaultValue = null, $delete = false);
     * ```
     * 
     * @param string $key the key identifying the flash message
     * @param mixed $defaultValue value to be returned if the flash message does not exist.
     * @param bool $delete whether to delete this flash message right after this method is called.
     * If false, the flash message will be automatically deleted in the next request.
     * @return mixed the flash message or an array of messages if addFlash was used
     * @see set()
     * @see add()
     * @see has()
     * @see getAll()
     * @see remove()
     */
    public static function get($key, $defaultValue = null, $delete = false)
    {
        Yii::$app->session->getFlash($key, $defaultValue = null, $delete = false);
    }

    /**
     * Returns all flash messages.
     * 
     * Shortcut of
     * 
     * ```php
     *    Yii::$app->session->getAllFlashes($delete);
     * ```
     *
     * You may use this method to display all the flash messages in a view file:
     *
     * ```php
     * <?php
     * foreach (Flash::getAll() as $key => $message) {
     *     echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
     * } ?>
     * ```
     *
     * With the above code you can use the [bootstrap alert][] classes such as `success`, `info`, `danger`
     * as the flash message key to influence the color of the div.
     *
     * Note that if you use [[addFlash()]], `$message` will be an array, and you will have to adjust the above code.
     *
     * [bootstrap alert]: http://getbootstrap.com/components/#alerts
     *
     * @param bool $delete whether to delete the flash messages right after this method is called.
     * If false, the flash messages will be automatically deleted in the next request.
     * @return array flash messages (key => message or key => [message1, message2]).
     * @see set()
     * @see add()
     * @see get()
     * @see has()
     * @see remove)
     */
    public static function getAll($delete = false)
    {
        Yii::$app->session->getAllFlashes($delete);
    }

    /**
     * Sets a flash message.
     * 
     * shortcut of 
     * 
     * ```php
     *    Yii::$app->session->setFlash($key, $value = true, $removeAfterAccess = true);
     * ```
     * 
     * A flash message will be automatically deleted after it is accessed in a request and the deletion will happen
     * in the next request.
     * If there is already an existing flash message with the same key, it will be overwritten by the new one.
     * @param string $key the key identifying the flash message. Note that flash messages
     * and normal session variables share the same name space. If you have a normal
     * session variable using the same name, its value will be overwritten by this method.
     * @param mixed $value flash message
     * @param bool $removeAfterAccess whether the flash message should be automatically removed only if
     * it is accessed. If false, the flash message will be automatically removed after the next request,
     * regardless if it is accessed or not. If true (default value), the flash message will remain until after
     * it is accessed.
     * @see get()
     * @see add()
     * @see remove()
     */
    public static function set($key, $value = true, $removeAfterAccess = true)
    {
        Yii::$app->session->setFlash($key, $value = true, $removeAfterAccess = true);
    }

    /**
     * Adds a flash message.
     * 
     * Shortcut of 
     * 
     * ```php
     *    Yii::$app->session->addFlash($key, $value = true, $removeAfterAccess = true);
     * ```
     * 
     * If there are existing flash messages with the same key, the new one will be appended to the existing message array.
     * @param string $key the key identifying the flash message.
     * @param mixed $value flash message
     * @param bool $removeAfterAccess whether the flash message should be automatically removed only if
     * it is accessed. If false, the flash message will be automatically removed after the next request,
     * regardless if it is accessed or not. If true (default value), the flash message will remain until after
     * it is accessed.
     * @see get()
     * @see set()
     * @see remove()
     */
    public static function add($key, $value = true, $removeAfterAccess = true)
    {
        Yii::$app->session->addFlash($key, $value = true, $removeAfterAccess = true);
    }

    /**
     * Removes a flash message.
     * 
     * Shortcut of 
     * 
     * ```php
     *    Yii::$app->session->removeFlash($key);
     * ```
     * 
     * @param string $key the key identifying the flash message. Note that flash messages
     * and normal session variables share the same name space.  If you have a normal
     * session variable using the same name, it will be removed by this method.
     * @return mixed the removed flash message. Null if the flash message does not exist.
     * @see get()
     * @see set()
     * @see add()
     * @see removeAll()
     */
    public static function remove($key)
    {
        Yii::$app->session->removeFlash($key);
    }

    /**
     * Removes all flash messages.
     * 
     * Shortcut of
     * 
     * ```php
     *    Yii::$app->session->removeAllFlashes();
     * ```
     * 
     * Note that flash messages and normal session variables share the same name space.
     * If you have a normal session variable using the same name, it will be removed
     * by this method.
     * @see get()
     * @see set()
     * @see add()
     * @see remove()
     */
    public static function removeAll()
    {
        Yii::$app->session->removeAllFlashes();
    }

    /**
     * Returns a value indicating whether there are flash messages associated with the specified key.
     * 
     * Shortcut of
     * 
     * ```php
     *    Yii::$app->session->hasFlash($key);
     * ```
     * 
     * @param string $key key identifying the flash message type
     * @return bool whether any flash messages exist under specified key
     */
    public static function has($key)
    {
        Yii::$app->session->hasFlash($key);
    }
}
