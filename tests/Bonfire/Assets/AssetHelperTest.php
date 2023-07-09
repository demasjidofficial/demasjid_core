<?php

namespace Tests\Assets;

use CodeIgniter\Config\Factories;
use RuntimeException;
use Tests\Support\TestCase;

/**
 * @internal
 */
final class AssetHelperTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        helper('assets');
    }

    public function testAssetThrowsNoFilename()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('You must provide a valid filename and extension to the asset() helper.');

        assetUrlLink(assetUrl('foo', 'css'));
    }

    public function testAssetThrowsNoExtension()
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('You must provide a valid filename and extension to the asset() helper.');

        assetUrlLink(assetUrl('admin/foo', 'css'));
    }

    public function testAssetVersion()
    {
        $config              = config('Assets');
        $config->bustingType = 'version';
        Factories::injectMock('config', 'Assets', $config);

        $link = assetUrlLink(assetUrl('admin/css/admin.css'), 'css');

        // In testing environment, would be the current timestamp
        // so just test the pattern to ensure that works.
        preg_match('|assets/admin/css/admin.([\d]+).css|i', $link, $matches);
        $this->assertIsNumeric($matches[1]);
    }

    public function testAssetFile()
    {
        $config              = config('Assets');
        $config->bustingType = 'file';
        Factories::injectMock('config', 'Assets', $config);

        $link = assetUrlLink(assetUrl('admin/css/admin.css'), 'css');

        // In testing environment, would be the current timestamp
        // so just test the pattern to ensure that works.
        preg_match('|assets/admin/css/admin.([\d]+).css|i', $link, $matches);
        $this->assertSame(filemtime(ROOTPATH . 'themes/Admin/css/admin.css'), (int) $matches[1]);
    }
}
