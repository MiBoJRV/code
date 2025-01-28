import React from 'react';
import { WorkCard } from 'src/components';
import { PageSection, Heading2, Text2 } from 'src/ui-kit';
import { OUR_WORKS_CONFIG } from './constants';

export const OurWorkSection: React.FC = (): JSX.Element => (
  <PageSection className="flex flex-col items-center">
    <Heading2 title="Our work" className="mb-4 text-center" />
    <Text2
      title="Check out examples of the recent projects we've delivered to our clients."
      className="max-w-screen-xs mb-12 text-center"
    />
    <div className="w-full lg:flex items-center justify-between">
      {OUR_WORKS_CONFIG.map((work) => (
        <WorkCard key={work.id} {...work} />
      ))}
    </div>
  </PageSection>
);
