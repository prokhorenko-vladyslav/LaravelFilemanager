<?php


namespace Laurel\FileManager\App\Storages;


use Laurel\FileManager\App\Contracts\StorageContract;
use Laurel\FileManager\App\Models\Directory;
use Laurel\FileManager\App\Models\File;
use Illuminate\Support\Collection;

class GoogleDriveStorage implements StorageContract
{

    public function getBaseInfo(): Collection
    {
        // TODO: Implement getBaseInfo() method.
    }

    public function search($query, $page, $limit): Collection
    {
        // TODO: Implement search() method.
    }

    public function fetchFiles($page, $limit): Collection
    {
        // TODO: Implement fetchFiles() method.
    }

    public function fetchFile($fileKey): File
    {
        // TODO: Implement fetchFile() method.
    }

    public function uploadFile($fileInfo): File
    {
        // TODO: Implement uploadFile() method.
    }

    public function downloadFile(): string
    {
        // TODO: Implement downloadFile() method.
    }

    public function renameFile($fileKey, $newName): bool
    {
        // TODO: Implement renameFile() method.
    }

    public function deleteFile($fileKey): bool
    {
        // TODO: Implement deleteFile() method.
    }

    public function shareFile($fileKey): string
    {
        // TODO: Implement shareFile() method.
    }

    public function archiveFile($fileKey): string
    {
        // TODO: Implement archiveFile() method.
    }

    public function addFileToFavorites($fileKey): bool
    {
        // TODO: Implement addFileToFavorites() method.
    }

    public function addFileToBookmarks($fileKey): bool
    {
        // TODO: Implement addFileToBookmarks() method.
    }

    public function fetchDirectories($page, $limit): Collection
    {
        // TODO: Implement fetchDirectories() method.
    }

    public function fetchDirectory($directoryKey): Directory
    {
        // TODO: Implement fetchDirectory() method.
    }

    public function createDirectory($name, $accessRights): Directory
    {
        // TODO: Implement createDirectory() method.
    }

    public function uploadDirectory(Directory $directory): bool
    {
        // TODO: Implement uploadDirectory() method.
    }

    public function downloadDirectory(): string
    {
        // TODO: Implement downloadDirectory() method.
    }

    public function renameDirectory($directoryKey, $newName): bool
    {
        // TODO: Implement renameDirectory() method.
    }

    public function deleteDirectory($directoryKey): bool
    {
        // TODO: Implement deleteDirectory() method.
    }

    public function shareDirectory($directoryKey): string
    {
        // TODO: Implement shareDirectory() method.
    }

    public function archiveDirectory($directoryKey): string
    {
        // TODO: Implement archiveDirectory() method.
    }

    public function addDirectoryToFavorites($directoryKey): bool
    {
        // TODO: Implement addDirectoryToFavorites() method.
    }

    public function addDirectoryToBookmarks($directoryKey): bool
    {
        // TODO: Implement addDirectoryToBookmarks() method.
    }

    public function moveFileToAnotherDirectory($fileKey, $anotherDirectoryKey): bool
    {
        // TODO: Implement moveFileToAnotherDirectory() method.
    }

    public function moveDirectoryToAnotherDirectory($directoryKey, $anotherDirectoryKey): bool
    {
        // TODO: Implement moveDirectoryToAnotherDirectory() method.
    }

    public function changeAccessRights($accessRights): bool
    {
        // TODO: Implement changeAccessRights() method.
    }

    public function getMaxStorageCapacity(): string
    {
        // TODO: Implement getMaxStorageCapacity() method.
    }

    public function getAvailableStorageCapacity(): string
    {
        // TODO: Implement getAvailableStorageCapacity() method.
    }
}
