
    public function getLoadedModels(): array
    {
        return $this->_loadedModels;
    }

    public function getDatabase(): ?Database
    {
        return $this->_database;
    }
}