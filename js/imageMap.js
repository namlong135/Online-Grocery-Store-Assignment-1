class ImageMapScale {
  constructor(map, image) {
    this.image = image;
    this.objects = [];
    let areas = map.getElementsByTagName('area');

    for (let i = 0; i < areas.length; i++) {
      let area = areas[i];
      this.objects.push(
        {
          tag: area,
          coords: area.coords.split(',')
        }
      );
    }
    this.getProdCoord();
  }
  getProdCoord() {
    let scale = this.image.offsetWidth / 499;

    for (let i = 0; i < this.objects.length; i++) {
      let area = this.objects[i];
      let product_pos = [];

      for (let j = 0; j < area.coords.length; j++) {
        let prevCoord = area.coords[j];
        let newCoord = Math.round(prevCoord * scale);
        product_pos.push(newCoord);
      }
      area.tag.coords = product_pos.join(',');
    }
    return true;
  }
}
