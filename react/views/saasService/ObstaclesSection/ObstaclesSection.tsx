import React from 'react';
import { ObstaclesType } from 'src/types';
import { ObstacleListItem } from 'src/components';
import { Heading2, PageSection, StrongText } from 'src/ui-kit';
import { TextBracketLeftIcon, TextBracketRightIcon } from 'src/assets/icons';

export const ObstaclesSection: React.FC<ObstaclesType> = ({
  features,
}): JSX.Element => {
  return (
    <PageSection className="max-w-[1300px] m-auto">
      <Heading2 className="flex flex-wrap items-center justify-center text-center mb-14 lg:mb-12">
        <span>Battling any of</span>
        <span className="pl-3">these</span>
        <div className="relative px-5 lg:px-9">
          <TextBracketLeftIcon className="absolute top-1 left-2 h-12 lg:h-20 lg:left-4" />
          <StrongText title="obstacles" />
          <TextBracketRightIcon className="absolute top-1 right-2 h-12 lg:h-20 lg:right-4" />
        </div>
        <span> ?</span>
      </Heading2>
      <div>
        <ul className="flex flex-col justify-between items-center text-center lg:flex-row">
          {features.map((feature) => (
            <ObstacleListItem key={feature.id} {...feature} />
          ))}
        </ul>
      </div>
    </PageSection>
  );
};
