# Magmi 2 for Magento 2 > 2.3.x

This is fork from official magmi Github reposiotry (https://github.com/dweeves/magmi-git). This fork use version 0.7.23 of magmi with changes for Magento 2 imported from repositories:

tagesjump/magmi-m2 - https://github.com/tagesjump/magmi-m2 <br>
pushnov-i/magmi-m2 - https://github.com/pushnov-i/magmi-m2 <br>
On top of that custom compatibility fixes were added.

# My fixes for now are
1. Unirgy Udropship module integretion for the dropdown "udropship_vendor". (To assing a product to a vendor)
2. Added checks for isset() and !empty() by category and image import (becase of this MAGMI wont stop the import)

# Known working plugins:
On the fly category creator/importer <br>
On the fly indexer <br>
Configurable Item processor <br>
Image attributes processor <br> <br>

# I will continue to fix MAGMI for Magento 2, if you know a bug let me know.
