<?php


namespace Laurel\FileManager\App\Contracts;


use Laurel\FileManager\App\Models\Directory;
use Laurel\FileManager\App\Models\File;
use Illuminate\Support\Collection;

interface StorageContract
{
    public function getBaseInfo() : Collection;
    public function search($query, $page, $limit) : Collection;
    public function fetchFiles($page, $limit) : Collection;
    public function fetchFile($fileKey) : File;
    public function uploadFile($fileInfo) : File;
    public function downloadFile() : string;
    public function renameFile($fileKey, $newName) : bool;
    public function deleteFile($fileKey) : bool;
    public function shareFile($fileKey) : string;
    public function archiveFile($fileKey) : string;
    public function addFileToFavorites($fileKey) : bool;
    public function addFileToBookmarks($fileKey) : bool;
    public function fetchDirectories($page, $limit) : Collection;
    public function fetchDirectory($directoryKey) : Directory;
    public function createDirectory($name, $accessRights) : Directory;
    public function uploadDirectory(Directory $directory) : bool;
    public function downloadDirectory() : string;
    public function renameDirectory($directoryKey, $newName) : bool;
    public function deleteDirectory($directoryKey) : bool;
    public function shareDirectory($directoryKey) : string;
    public function archiveDirectory($directoryKey) : string;
    public function addDirectoryToFavorites($directoryKey) : bool;
    public function addDirectoryToBookmarks($directoryKey) : bool;
    public function moveFileToAnotherDirectory($fileKey, $anotherDirectoryKey) : bool;
    public function moveDirectoryToAnotherDirectory($directoryKey, $anotherDirectoryKey) : bool;
    public function changeAccessRights($accessRights) : bool;
    public function getMaxStorageCapacity() : string;
    public function getAvailableStorageCapacity() : string;
}
