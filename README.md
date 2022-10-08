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
  
```
    Using scanpy to compute markers
    Computing markers for clusters
    Wrote adata X 1000/18467
    ...
    writing adata obs    
    writing adata obsm
```
# Change: src/StaticServerApi.js

return fetch('/datasets.json').then((response)

to

return fetch(window.DS+'/datasets.json').then((response)

# Move or copy datasets.json to dataset directory:
```   
.
├── asset-manifest.json
├── datasets.json
├── datasets.php
├── favicon.ico
├── index.html
├── index.php
├── manifest.json
├── pbmc3k
│   ├── datasets.json
│   ├── markers.json
│   ├── pbmc3k
│   ├── pbmc3k.h5ad
│   └── results
├── spatial
│   ├── datasets.json
│   ├── results
│   ├── spatial
│   ├── V1_Human_Lymph_Node
│   ├── V1_Human_Lymph_Node.h5ad
│   └── V1_Human_Lymph_Node.zip
└── static
    └── js
```
# Compile

REACT_APP_STATIC=true yarn build
