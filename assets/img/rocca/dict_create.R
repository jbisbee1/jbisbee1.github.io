require(tidyverse)
setwd('D:/Dropbox/personal/Professional/Webpage/chuckles/jbisbee1.github.io/assets/img/rocca')
imgs <- list.files(pattern = 'jpg')

dict <- NULL
counter <- 1
for(f in imgs) {
  dict <- dict %>%
    bind_rows(data.frame(filename = f,
                         index = counter))
  counter <- counter + 1
}

write_csv(dict,file = './dictionary_lookup.csv')

for(i in 1:nrow(dict)) {
  # dict[i,]
  file.rename(dict$filename[i],paste0('image_',dict$index[i],'.jpg'))
}
