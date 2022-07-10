using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Model
{
    public class Feedback
    {
        public string FeedbackID { get; set; } = "";
        public string NewsID { get; set; } = "";
        public string Email { get; set; } = "";
        public string NameReader { get; set; } = "";
        public string Contents { get; set; } = "";
        public string Status { get; set; } = "";
        public string DateComment { get; set; } = "";
        public string IsDeleted { get; set; } = "";

    }
}
