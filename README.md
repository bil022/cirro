# cirro
modiy cirrocumulus to support multiple datasets (https://github.com/lilab-bcb/cirrocumulus)

https://cirrocumulus.readthedocs.io/en/latest/installation.html

# httpd.conf
  grep index.php /etc/httpd/conf/httpd.conf
  
  DirectoryIndex index.php index.html
  
  sudo apachectl restart

# datasets:
  wget https://github.com/klarman-cell-observatory/cirrocumulus/raw/master/docs/example_data.zip

  wget https://github.com/klarman-cell-observatory/cirrocumulus/raw/master/docs/V1_Human_Lymph_Node.zip
  
  cirro prepare_data pbmc3k.h5ad --format jsonl

  cirro prepare_data V1_Human_Lymph_Node.h5ad --format jsonl
  
    Using scanpy to compute markers
  
    Computing markers for clusters
    
    Wrote adata X 1000/18467
    
    ...
    
    writing adata obs
    
    writing adata obsm
