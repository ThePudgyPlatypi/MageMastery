#!/bin/bash
browser-sync start --proxy='magento.training' --files="*.css, app/code/MageMastery/Todo" --ignore="*.less" cors="true"