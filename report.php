<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>


    <div style="margin-left:450px; margin-top:250px;">
        <form id="uploadForm">
            <div className="form-group row" style="padding-top:10px;">
                <input type="file" id="uploadFile" name="filename" onChange={this.fileChangeHandler} />
                <button type="button" onClick={this.uploadFile} disabled={this.state.isFileSelected? false : true}>Upload File</button>

                <div style={{color: 'green'}}></div>

            </div>

            <div className="form-group row" style="padding-top:20px;">
                <input type="button" value="Generate Report" />
            </div>

            <div className="form-group row" style="padding-top:20px;">
                <input type="text" name="billNo" onChange={this.billNoChange} placeholder="Please enter billing number" />
                <input type="text" name="startDate" onChange={this.startDateChange} placeholder="Start Date (YYYYMMDD)" style={{marginLeft: 8}} />
                <input type="text" name="endDate" onChange={this.endDateChange} placeholder="End Date (YYYYMMDD)" style={{marginLeft: 8}} />
                <button type="button" onClick={this.downloadReport} disabled={this.state.isReportReady ? false : true} style={{marginLeft: 8}}>Download Report</button>

                <div style={{color: 'green'}}></div>

            </div>

            <div style="padding-top:20px;">
                <button type="button" onClick={this.retrieveFullData}>Retrieve Full Data</button>
            </div>




        </form>

    </div>

</body>

</html>