<?php

namespace ByJG\Util;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-08-11 at 17:31:08.
 */
class UriTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    public function uriProvider()
    {
        return [
            [
                'http://username:password@hostname/path?arg=value#anchor',
                [
                    'Scheme' => 'http',
                    'Username' => 'username',
                    'Password' => 'password',
                    'Userinfo' => 'username:password',
                    'Host' => 'hostname',
                    'Port' => null,
                    'Path' => '/path',
                    'Query' => 'arg=value',
                    'Fragment' => 'anchor',
                    'Authority' => 'username:password@hostname'
                ]
            ],
            [
                'http://username:password@hostname/path/path2?arg=value&arg2=value2#anchor',
                [
                    'Scheme' => 'http',
                    'Username' => 'username',
                    'Password' => 'password',
                    'Userinfo' => 'username:password',
                    'Host' => 'hostname',
                    'Port' => null,
                    'Path' => '/path/path2',
                    'Query' => 'arg=value&arg2=value2',
                    'Fragment' => 'anchor',
                    'Authority' => 'username:password@hostname'
                ]
            ],
            [
                'http://hostname/path/path2?arg=value&arg2=value2#anchor',
                [
                    'Scheme' => 'http',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'hostname',
                    'Port' => null,
                    'Path' => '/path/path2',
                    'Query' => 'arg=value&arg2=value2',
                    'Fragment' => 'anchor',
                    'Authority' => 'hostname'
                ]
            ],
            [
                'http://username@hostname/path/path2?arg=value&arg2=value2#anchor',
                [
                    'Scheme' => 'http',
                    'Username' => 'username',
                    'Password' => null,
                    'Userinfo' => 'username',
                    'Host' => 'hostname',
                    'Port' => null,
                    'Path' => '/path/path2',
                    'Query' => 'arg=value&arg2=value2',
                    'Fragment' => 'anchor',
                    'Authority' => 'username@hostname'
                ]
            ],
            [
                'http://email@host.com.br:password@hostname/path/path2?arg=value&arg2=value2#anchor',
                [
                    'Scheme' => 'http',
                    'Username' => 'email@host.com.br',
                    'Password' => 'password',
                    'Userinfo' => 'email@host.com.br:password',
                    'Host' => 'hostname',
                    'Port' => null,
                    'Path' => '/path/path2',
                    'Query' => 'arg=value&arg2=value2',
                    'Fragment' => 'anchor',
                    'Authority' => 'email@host.com.br:password@hostname'
                ]
            ],
            [
                'file:///home/user/file.txt',
                [
                    'Scheme' => 'file',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => null,
                    'Port' => null,
                    'Path' => '/home/user/file.txt',
                    'Query' => null,
                    'Fragment' => null,
                    'Authority' => null
                ]
            ],
            [
                'https://hostname.com:443',
                [
                    'Scheme' => 'https',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Port' => 443,
                    'Host' => 'hostname.com',
                    'Path' => null,
                    'Query' => null,
                    'Fragment' => null,
                    'Authority' => 'hostname.com:443'
                ]
            ],
            [
                'http://hostname.com/#anchor',
                [
                    'Scheme' => 'http',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'hostname.com',
                    'Port' => null,
                    'Path' => '/',
                    'Query' => null,
                    'Fragment' => 'anchor',
                    'Authority' => 'hostname.com'
                ]
            ],
            [
                'mysql://root:password@host-10.com:3306/database?extraparam=10',
                [
                    'Scheme' => 'mysql',
                    'Username' => 'root',
                    'Password' => 'password',
                    'Userinfo' => 'root:password',
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => '/database',
                    'Query' => 'extraparam=10',
                    'Fragment' => null,
                    'Authority' => 'root:password@host-10.com:3306'
                ]
            ],
            [
                'mysql://ro@11!%&*(ot:pass@(*&!$$word@host-10.com:3306/database?extraparam=10',
                [
                    'Scheme' => 'mysql',
                    'Username' => 'ro@11!%&*(ot',
                    'Password' => 'pass@(*&!$$word',
                    'Userinfo' => 'ro@11!%&*(ot:pass@(*&!$$word',
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => '/database',
                    'Query' => 'extraparam=10',
                    'Fragment' => null,
                    'Authority' => 'ro@11!%&*(ot:pass@(*&!$$word@host-10.com:3306'
                ]
            ],
            [
                'mysql://root@host-10.com:3306/database?extraparam=10',
                [
                    'Scheme' => 'mysql',
                    'Username' => 'root',
                    'Password' => null,
                    'Userinfo' => 'root',
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => '/database',
                    'Query' => 'extraparam=10',
                    'Fragment' => null,
                    'Authority' => 'root@host-10.com:3306'
                ]
            ],
            [
                'mysql://root@host-10.com:3306/database?extraparam=10',
                [
                    'Scheme' => 'mysql',
                    'Username' => 'root',
                    'Password' => null,
                    'Userinfo' => 'root',
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => '/database',
                    'Query' => 'extraparam=10',
                    'Fragment' => null,
                    'Authority' => 'root@host-10.com:3306'
                ]
            ],
            [
                'mysql://host-10.com:3306/database?extraparam=10',
                [
                    'Scheme' => 'mysql',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => '/database',
                    'Query' => 'extraparam=10',
                    'Fragment' => null,
                    'Authority' => 'host-10.com:3306'
                ]
            ],
            [
                'mysql://host-10.com/database',
                [
                    'Scheme' => 'mysql',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'host-10.com',
                    'Port' => null,
                    'Path' => '/database',
                    'Query' => null,
                    'Fragment' => null,
                    'Authority' => 'host-10.com'
                ]
            ],
            [
                'mysql://host-10.com:3306/database',
                [
                    'Scheme' => 'mysql',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => '/database',
                    'Query' => null,
                    'Fragment' => null,
                    'Authority' => 'host-10.com:3306'
                ]
            ],
            [
                'mysql://host-10.com:3306?extraparam=10',
                [
                    'Scheme' => 'mysql',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => null,
                    'Query' => 'extraparam=10',
                    'Fragment' => null,
                    'Authority' => 'host-10.com:3306'
                ]
            ],
            [
                'mysql://host-10.com:3306?extraparam=10&other=20',
                [
                    'Scheme' => 'mysql',
                    'Username' => null,
                    'Password' => null,
                    'Userinfo' => null,
                    'Host' => 'host-10.com',
                    'Port' => 3306,
                    'Path' => null,
                    'Query' => 'extraparam=10&other=20',
                    'Fragment' => null,
                    'Authority' => 'host-10.com:3306'
                ]
            ],
        ];
    }

    /**
     * @dataProvider uriProvider
     * @param $uriStr
     * @param null $assertFields
     */
    public function testParse($uriStr, $assertFields = null)
    {
        $uri = new Uri($uriStr);

        foreach ((array)$assertFields as $field => $expected) {
            $this->assertEquals($expected, $uri->{"get" . $field}(), 'Method ' . "get" . $field);
        }

        $this->assertEquals($uriStr, $uri->__toString());
    }
}
