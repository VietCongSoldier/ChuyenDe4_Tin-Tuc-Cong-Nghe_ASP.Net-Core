using Microsoft.AspNetCore.Mvc;
using BLL;
using Model;
using System.Collections.Generic;

namespace TH_API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class LoaiTinTucConTroller : Controller
    {
        CategoryBLL bll = new CategoryBLL ();
        [Route("getall")]
        [HttpGet]
        public List<Category> getall()
        {
            return bll.getall();
        }
        [HttpGet("{id}")]
        public List<Category> Getid(string id)
        {
            return bll.getbyid(id);
        }
        [Route("add")]

        [HttpPost]
        public string AddLSP(Category l)
        {
            return bll.add(l);
        }
        [Route("update")]

        [HttpPost]
        public string UpdateLSP(Category l)
        {
            return bll.update(l);
        }
        [Route("delete")]
        [HttpDelete]
        public string Delete(string id)
        {
            return bll.xoa(id);
        }
    }
}
