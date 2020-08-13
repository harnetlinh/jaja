import request from '@/utils/request';
import Resource from '@/api/resource';

class DepartmentResource extends Resource {
  constructor() {
    super('department');
  }

//   permissions(id) {
//     return request({
//       url: '/' + this.uri + '/' + id + '/permissions',
//       method: 'get',
//     });
//   }
}

export { DepartmentResource as default };
