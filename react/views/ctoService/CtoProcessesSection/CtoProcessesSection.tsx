import React from 'react';
import { CtoProcessType } from 'src/types';
import { PageSection } from 'src/ui-kit';
import { CtoProcessesListItem } from 'src/components';
import ganttChart from 'src/assets/images/ganttChart.svg';
import ganttChartMob from 'src/assets/images/ganttChartMob.svg';

export const CtoProcessesSection: React.FC<CtoProcessType> = ({
  processes,
}): JSX.Element => (
  <PageSection>
    <div className="flex justify-center mx-auto max-w-[1188px] mb-16 lg:mb-52">
      <img
        className="hidden sm:inline-block"
        src={ganttChart}
        alt="Gantt Chart"
      />
      <img
        className="inline-block sm:hidden"
        src={ganttChartMob}
        alt="Gantt Chart"
      />
    </div>
    <ol>
      {processes.map((process) => (
        <CtoProcessesListItem key={process.id} {...process} />
      ))}
    </ol>
  </PageSection>
);
