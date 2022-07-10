using Microsoft.AspNetCore.Mvc;
using BLL;
using Model;
using System.Collections.Generic;

namespace TH_API.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class FeedbackConTroller : Controller
    {
        FeedbackBLL bll = new FeedbackBLL ();
        [Route("getall")]
        [HttpGet]
        public List<Feedback> getall()
        {
            return bll.getall();
        }
        [HttpGet("{id}")]
        public List<Feedback> Getid(string id)
        {
            return bll.getbyid(id);
        }
        [Route("add")]

        [HttpPost]
        public string AddFeedback(Feedback l)
        {
            return bll.add(l);
        }
        [Route("update")]

        [HttpPost]
        public string Update(Feedback l)
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
