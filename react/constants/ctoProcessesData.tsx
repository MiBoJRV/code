import { CtoProcessType } from 'src/types';
import { EmphasizedText } from 'src/ui-kit';
import React from 'react';

export const STO_PROCESSES_DATA: CtoProcessType = {
  processes: [
    {
      id: 'technology_assessment',
      className: 'lg:max-w-[977px]',
      title: '01. Technology assessment',
      description: (
        <>
          Our
          <EmphasizedText title=" CTO carefully examines your business needs and conducts research " />
          on various technologies to identify the optimal tech stack for
          implementing your idea.
        </>
      ),
    },
    {
      id: 'project_planning',
      className: 'lg:max-w-[977px]',
      title: '02. Project planning',
      description: (
        <>
          At the planning stage, our
          <EmphasizedText title=" CTO will craft a product development roadmap" />
          , establish project objectives, set timelines, calculate risks, and
          put together a software development team.
        </>
      ),
    },
    {
      id: 'software_development',
      className: 'lg:max-w-[990px]',
      title: '03. Software development',
      description: (
        <>
          Our
          <EmphasizedText title=" CTO will oversee your development team" />
          , conducting
          <EmphasizedText title=" code reviews" />
          , addressing technical issues, and
          <EmphasizedText title=" ensuring exceptional product quality " />
          and timely delivery.
        </>
      ),
    },
    {
      id: 'scaling_maintenance',
      className: 'lg:max-w-[930px]',
      title: '04. Scaling and maintenance',
      description: (
        <>
          As your product grows, we
          <EmphasizedText title=" step in to synchronize your business and tech plans " />
          and identify the most effective methods for scaling your technology.
        </>
      ),
    },
  ],
};
